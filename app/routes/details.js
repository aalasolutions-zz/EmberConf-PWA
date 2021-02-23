import Route from '@ember/routing/route';

export default class DetailsRoute extends Route {
  model(params) {
    console.log(params);
    // return server.getDataStore(params.dataStoreId);
  };
}
