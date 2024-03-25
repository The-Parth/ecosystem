const express = require('express');
const mongoose = require('mongoose');
require('dotenv').config();
const app = express();
const port = process.env.PORT || 3000;
const { Ecosystem, Waterbody, Species, Animal, Plant } = require('./dataschemas/models');
const uri = process.env.MONGO_URI || 'mongodb://localhost:27017';
mongoose.connect(`${uri}`, {
  useNewUrlParser: true,
})
.then(() => {
  console.log('Connected to MongoDB');
  
  // Routes
  app.get('/', (req, res) => {
    res.send('Welcome Life Over Land');
  });

  app.get('/ecosystems', async (req, res) => {
    try {
      const ecosystems = await Ecosystem.find();
      res.json(ecosystems);
    } catch (error) {
      console.error('Error fetching ecosystems:', error);
      res.status(500).json({ error: 'Internal server error' });
    }
  });

  app.get('/waterbodies', async (req, res) => {
    try {
      const waterbodies = await Waterbody.find();
      res.json(waterbodies);
    } catch (error) {
      console.error('Error fetching waterbodies:', error);
      res.status(500).json({ error: 'Internal server error' });
    }
  });

  app.get('/species', async (req, res) => {
    try {
      const species = await Species.find();
      res.json(species);
    } catch (error) {
      console.error('Error fetching species:', error);
      res.status(500).json({ error: 'Internal server error' });
    }
  });

  app.get('/animals', async (req, res) => {
    try {
      const animals = await Animal.find();
      res.json(animals);
    } catch (error) {
      console.error('Error fetching animals:', error);
      res.status(500).json({ error: 'Internal server error' });
    }
  });

  app.get('/plants', async (req, res) => {
    try {
      const plants = await Plant.find();
      res.json(plants);
    } catch (error) {
      console.error('Error fetching plants:', error);
      res.status(500).json({ error: 'Internal server error' });
    }
  });

  app.listen(port, () => {
    console.log(`Server is running on http://localhost:${port}`);
  });
})
.catch(error => {
  console.error('Error connecting to MongoDB:', error);
});


/* Test ecosystem added in mongo

const newEcosystem = new Ecosystem({
    E_NAME: 'Sahara',
    E_TYPE: 'Desert',
    E_CLIMATE: 'Hot',
    ANNUAL_RAINFALL: 0,
    SOIL_TYPE: 'Sandy',
    REGION: 'Africa',
    COUNTRY: 'Egypt',
    AREA: 998190
    // Set other fields as needed
  });
  newEcosystem.save()
    .then(() => {
      console.log('New ecosystem added successfully');
    })
    .catch(error => {
      console.error('Error adding new ecosystem:', error);
    });
    */


