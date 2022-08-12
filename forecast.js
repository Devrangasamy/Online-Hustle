class forecast {
  constructor() {
    this.key = "1b39bd85f620995d0c27aa7c888acf17";
    this.WeatherURL =
      "http://dataservice.accuweather.com/currentconditions/v1/";
    this.cityURL = "http://api.openweathermap.org/data/2.5/forecast";
    this.units = "metric";
  }
  async updateCity(city) {
    const cityDets = await this.getCity(city);
    return {
      cityDets,
    };
  }

  async getCity(city) {
    const query = `?q=${city}&appid=${this.key}&units=${this.units}`;
    const response = await fetch(this.cityURL + query);
    const data = await response.json();
    return data;
  }
}
