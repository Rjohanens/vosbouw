<x-mail::message>
# Nieuwe contactaanvraag
 
Er is een nieuwe contactaanvraag binnengekomen van {{ $firstName }} {{ $lastName }}.
 
### Contactgegevens
- **Naam:** {{ $firstName }} {{ $lastName }}
- **E-mailadres:** {{ $email }}
- **Telefoonnummer:** {{ $phone }}

### Bericht
{{ $message }}
</x-mail::message>