---
{"category_name":"easy","problem_code":"SFXPAL","problem_name":"Suffix Palindromes","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.6","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"PYP3","47":"CLOJ","48":"COB","49":"FS"},"max_timelimit":0.5,"source_sizelimit":50000,"problem_author":"bciobanu","problem_tester":null,"date_added":"18-11-2018","tags":{"0":"bciobanu","1":"combinatorics","2":"easy","3":"modular","4":"snckel19","5":"taran_1407"},"editorial_url":"https://discuss.codechef.com/problems/SFXPAL","time":{"view_start_date":1544295600,"submit_start_date":1544295600,"visible_start_date":1544295600,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span>###Read problems statements in [Hindi](http://www.codechef.com/download/translated/S19ELTST/hindi/SFXPAL.pdf), [Mandarin Chinese](http://www.codechef.com/download/translated/S19ELTST/mandarin/SFXPAL.pdf), [Russian](http://www.codechef.com/download/translated/S19ELTST/russian/SFXPAL.pdf), [Vietnamese](http://www.codechef.com/download/translated/S19ELTST/vietnamese/SFXPAL.pdf) and [Bengali](http://www.codechef.com/download/translated/S19ELTST/bengali/SFXPAL.pdf) as well.

Consider an alphabet with $S$ characters. Find the number of strings with length $N$ containing only characters from this alphabet which do not have any palindromic suffix with length greater than $1$. Since this number may be very large, compute it modulo $M$.

### Input
The first and only line of the input contains three space-separated integers $N$, $S$ and $M$. 

### Output
Print a single line containing one integer — the number of strings.

### Constraints 
- $1 \le N \le 1,000$
- $1 \le S \le M - 1$
- $2 \le M \le 2^{30} - 1$
- $M$ is a prime

### Example Input
```
3 3 13
```

### Example Output
```
12
```

### Explanation
Let's suppose that the alphabet is $\{a, b, c\}$. Then, the strings are "cca", "cab", "bba", "aac", "acb", "cba", "bac", "ccb", "bbc", "aab", "bca", "abc".
