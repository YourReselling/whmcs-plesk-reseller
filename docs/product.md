# Plesk Reseller

Bestellung: `POST /products/plesk/accounts/create`. ID: `data.id`.

Kundenfelder: `name`, `email`.

| Feld | Typ | Pflicht | Hinweis |
|---|---|---|---|
| `email` | string | Ja | required; email; max:255 |
| `name` | string | Ja | required; string; max:255 |
| `plan_id` | string | Ja | required; uuid; exists:plesk_plans,id |

API-Key-Rechte für alle Modulansichten und Aktionen: `plesk:create`, `plesk:delete`, `plesk:read`, `plesk:update`.

Verwaltungsaktionen: Produktübersicht und Zugangsdaten.

Hinweise:
- Optional suspend reason string max500
- POST /products/plesk/accounts/{account}/cancel schedules end-of-month cancellation; revoke-cancel supported
