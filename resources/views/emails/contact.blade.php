<p>Name: {{ is_string($name) ? htmlspecialchars($name, ENT_QUOTES, 'UTF-8') : 'Invalid data' }}</p>
<p>Email: {{ is_string($email) ? htmlspecialchars($email, ENT_QUOTES, 'UTF-8') : 'Invalid data' }}</p>
<p>Project: {{ is_string($EmailEntreprise) ? htmlspecialchars($EmailEntreprise, ENT_QUOTES, 'UTF-8') : 'Invalid data' }}
</p>
<p>Message: {{ is_string($message) ? htmlspecialchars($message, ENT_QUOTES, 'UTF-8') : 'Invalid data' }}</p>
