---
{"category_name":"school","problem_code":"SPELLBOB","problem_name":"Spell Bob","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.6","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"PYP3","47":"CLOJ","48":"COB","49":"FS"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"admin2","problem_tester":null,"date_added":"30-07-2018","tags":{"0":"admin2","1":"admin2","2":"aug18","3":"cakewalk","4":"likecs"},"editorial_url":"https://discuss.codechef.com/problems/SPELLBOB","time":{"view_start_date":1534152605,"submit_start_date":1534152605,"visible_start_date":1534152605,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3>Read problems statements in <a href="http://www.codechef.com/download/translated/AUG18/hindi/SPELLBOB.pdf" target="_blank">Hindi,</a>
<a href="http://www.codechef.com/download/translated/AUG18/mandarin/SPELLBOB.pdf" target="_blank">Mandarin chinese</a>
, <a href="http://www.codechef.com/download/translated/AUG18/russian/SPELLBOB.pdf" target="_blank">Russian</a> and <a href="http://www.codechef.com/download/translated/AUG18/vietnamese/SPELLBOB.pdf" target="_blank">Vietnamese</a> as well.</h3>

Chef likes to play with cards a lot. Today, he's playing a game with three cards. Each card has a letter written on the top face and another (possibly identical) letter written on the bottom face. Chef can arbitrarily reorder the cards and/or flip any of the cards in any way he wishes (in particular, he can leave the cards as they were). He wants to do it in such a way that the letters on the top faces of the cards, read left to right, would spell out the name of his favorite friend Bob.

Determine whether it is possible for Chef to spell "bob" with these cards.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains a single string with length $3$ denoting the characters written on the top faces of the first, second and third card.
- The second line contains a single string with length $3$ denoting the characters written on the bottom faces of the first, second and third card.

### Output
For each test case, print a single line containing the string "yes" (without quotes) if Chef can spell "bob" or "no" (without quotes) if he cannot.

### Constraints
- $1 \le T \le 20,000$
- each string contains only lowercase English letters

### Subtasks
**Subtask #1 (100 points):** original constraints

### Example Input
```
3
bob
rob
dbc
ocb
boc
obc
```

### Example Output
```
yes
yes
no

```

### Explanation
**Example case 1:** The top faces of the cards already spell out "bob".

**Example case 2:** Chef can rearrange the cards in the following way to spell "bob": the second card non-flipped, the first card flipped and the third card flipped.

**Example case 3:** There is no way for Chef to spell out "bob".
