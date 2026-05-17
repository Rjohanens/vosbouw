<x-mail::message>
# Maandelijkse test email
 
Dit is een test email die maandelijks wordt verzonden om te controleren of de mailconfiguratie correct is ingesteld. Als je deze email ontvangt, betekent dit dat de mailconfiguratie correct is en dat emails succesvol kunnen worden verzonden vanuit de applicatie.


Datum: {{ now()->toDateString() }}
Tijdstip: {{ now()->toTimeString() }}

Met vriendelijke groet,

**Vos Bouw**  
*Uw bouwpartner in de regio*

---

*Dit is een automatisch gegenereerd bericht. Je hoeft hier niet op te reageren.*
</x-mail::message>