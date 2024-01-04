const { redisClient, redisSetAsync } = require('./redisClient');
const crypto = require('crypto');

class NotificationEnqueue {
  constructor() {
    this.handleConnect = this.handleConnect.bind(this);
    this.handleError = this.handleError.bind(this);
    redisClient.on('connect', this.handleConnect);
    redisClient.on('error', this.handleError);
  }

  async start() {
    try {
      // Update Redis with the data
      const datas = [
        {
          type: 'email',
          body: { message: 'hello driver', name: "Mansur"},
          email: 'mansuribrahimnok@gmail.com',
          template: 'passenger',
        },
        {
          type: 'sms',
          body: { message: 'Welcome onboard, visit our location for inspection.' },
          receiverNumber: '08161939418',
        },
        {
          type: 'email',
          body: { message: 'Welcome onboard, visit our location for inspection.', name: "Musa" },
          email: 'musadabra@gmail.com',
          template: 'driver',
        },
      ];

      // Convert the data to JSON string and set in Redis using async/await
      for (const data of datas) {
        const jsonData = JSON.stringify(data);
        const hash = crypto.createHash('md5').update(jsonData).digest('hex');
        const key = `notification:${hash}`;
        try {
          await redisSetAsync(key, jsonData);
          console.log(`Data updated in Redis for key ${key}`);
        } catch (error) {
          console.error(`Error updating Redis for key ${key}:`, error);
        }
      }
    } catch (error) {
      console.error('Error updating Redis:', error);
    } finally {
      // Close the Redis connection after all notifications are saved
      await redisClient.quit();
    }
  }

  // Event listener for 'connect' event
  async handleConnect() {
    console.log('Connected to Redis Listener');
  }

  // Event listener for 'error' event
  async handleError(error) {
    console.error('Error connecting to Redis:', error);
  }

  // Method to remove event listeners
  async removeEventListeners() {
    redisClient.removeListener('connect', this.handleConnect);
    redisClient.removeListener('error', this.handleError);
  }
}

new NotificationEnqueue().start();
