import Model, { attr } from '@ember-data/model';

export default class PositionModel extends Model {
  @attr('string') type;
  @attr('string') url;
  @attr('string') company;
  @attr('string') company_url;
  @attr('string') location;
  @attr('string') title;
  @attr('string') description;
  @attr('string') how_to_apply;
  @attr('string') company_logo;
  @attr('date') created_at;
}
