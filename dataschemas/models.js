const mongoose = require('mongoose');

const ecosystemSchema = new mongoose.Schema({
  E_NAME: { type: String, required: true },
  E_TYPE: { type: String, required: true },
  E_CLIMATE: { type: String, required: true },
  ANNUAL_RAINFALL: { type: Number, required: true },
  SOIL_TYPE: { type: String, required: true },
  REGION: { type: String, required: true },
  COUNTRY: { type: String, required: true },
  AREA: { type: Number, required: true }
});

const waterbodySchema = new mongoose.Schema({
  E_TYPE: { type: String, required: true },
  WB_NAME: { type: String, required: true },
  FOODS_PRESENT: { type: String, required: true },
  SEASONAL_VARIATION: { type: String, required: true }
});

const speciesSchema = new mongoose.Schema({
  SPECIES_NAME: { type: String, required: true },
  FAMILY: { type: String, required: true },
  GENUS: { type: String, required: true },
  CONSERVATION_STATUS: { type: String, required: true },
  HABITAT_SUITABILITY: { type: String, required: true },
  DIET: String,
  SUITABLE_ECOSYSTEM: { type: String, required: true }
});

const animalSchema = new mongoose.Schema({
  A_POPULATION: { type: Number, required: true },
  AVERAGE_LIFESPAN: { type: Number, required: true },
  A_SNAME: String,
  A_NAME: { type: String, required: true }
});

const plantSchema = new mongoose.Schema({
  QUANTITY: { type: Number, required: true },
  SEASONAL_VARIATION: { type: String, required: true },
  P_SNAME: String,
  P_NAME: { type: String, required: true }
});

const Ecosystem = mongoose.model('Ecosystem', ecosystemSchema);
const Waterbody = mongoose.model('Waterbody', waterbodySchema);
const Species = mongoose.model('Species', speciesSchema);
const Animal = mongoose.model('Animal', animalSchema);
const Plant = mongoose.model('Plant', plantSchema);

module.exports = { Ecosystem, Waterbody, Species, Animal, Plant };