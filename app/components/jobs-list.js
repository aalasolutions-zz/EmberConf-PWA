import Component             from '@glimmer/component';
import { tracked }           from '@glimmer/tracking';
import { inject as service } from '@ember/service';
import { action } from '@ember/object';

export default class JobsListComponent extends Component {
  @service store;


  @tracked positions = this.args.model;
  @tracked positions = this.store.peekAll('job');
  //
  // constructor(some, args) {
  //   super(some, args);
  //   navigator.vibrate(200); // vibrate for 200ms
  // }

  // @action
  // vibrate(){
  //   console.log(window.navigator);
  //   navigator.vibrate(200); // vibrate for 200ms
  // }
}
