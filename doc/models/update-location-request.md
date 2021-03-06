## Update Location Request

Request object for the [UpdateLocation](#endpoint-updatelocation) endpoint.

### Structure

`UpdateLocationRequest`

### Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `location` | [`?Location`](/doc/models/location.md) | Optional | -  | getLocation(): ?Location | setLocation(?Location location): void |

### Example (as JSON)

```json
{
  "location": {
    "name": "Updated nickname",
    "description": "Updated description",
    "facebook_url": "null",
    "twitter_username": "twitter",
    "instagram_username": "instagram",
    "address": {
      "address_line_1": "1234 Peachtree St. NE",
      "administrative_district_level_1": "GA",
      "locality": "Atlanta",
      "postal_code": "30309"
    },
    "business_hours": {
      "periods": [
        {
          "day_of_week": "MON",
          "start_local_time": "09:00",
          "end_local_time": "17:00"
        }
      ]
    }
  }
}
```

