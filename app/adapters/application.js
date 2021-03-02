import RESTAdapter from '@ember-data/adapter/rest';

export default class ApplicationAdapter extends RESTAdapter {
  host = 'https://pwa.aalasolutions.com/mock';
}
