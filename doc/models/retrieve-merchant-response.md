## Retrieve Merchant Response

The response object returned by the [RetrieveMerchant](#endpoint-retrieveMerchant) endpoint.

### Structure

`RetrieveMerchantResponse`

### Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `errors` | [`?(Error[])`](/doc/models/error.md) | Optional | Information on errors encountered during the request. | getErrors(): ?array | setErrors(?array errors): void |
| `merchant` | [`?Merchant`](/doc/models/merchant.md) | Optional | Represents a Square seller. | getMerchant(): ?Merchant | setMerchant(?Merchant merchant): void |

### Example (as JSON)

```json
{
  "merchant": {
    "id": "DM7VKY8Q63GNP",
    "business_name": "Apple A Day",
    "country": "US",
    "language_code": "en-US",
    "currency": "USD",
    "status": "ACTIVE",
    "main_location_id": "9A65CGC72ZQG1"
  }
}
```

