---
{"category_name":"easy","problem_code":"CHEFPRMS","problem_name":"Chef and Semi-Primes","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.6","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"PYP3","47":"CLOJ","48":"COB","49":"FS"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"mgch","problem_tester":null,"date_added":"12-10-2018","tags":{"0":"easy","1":"mgch","2":"number","3":"precomputation","4":"sieve","5":"snckql19","6":"taran_1407"},"editorial_url":"https://discuss.codechef.com/problems/CHEFPRMS","time":{"view_start_date":1539698400,"submit_start_date":1539698400,"visible_start_date":1539698400,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span>###Read problems statements in [Hindi](http://www.codechef.com/download/translated/S19QLTST/hindi/CHEFPRMS.pdf) ,[Mandarin chinese](http://www.codechef.com/download/translated/S19QLTST/mandarin/CHEFPRMS.pdf) , [Russian](http://www.codechef.com/download/translated/S19QLTST/russian/CHEFPRMS.pdf), [Vietnamese](http://www.codechef.com/download/translated/S19QLTST/vietnamese/CHEFPRMS.pdf) and [Bengali](http://www.codechef.com/download/translated/S19QLTST/bengali/CHEFPRMS.pdf) as well.

Chef likes prime numbers. However, there is one thing he loves even more. Of course, it's semi-primes! A *semi-prime number* is an integer which can be expressed as a product of two distinct primes. For example, $15 = 3 \cdot 5$ is a semi-prime number, but $1$, $9 = 3 \cdot 3$ and $5$ are not.

Chef is wondering how to check if an integer can be expressed as a sum of two (not necessarily distinct) semi-primes. Help Chef with this tough task!

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first and only line of each test case contains a single integer $N$.

### Output
For each test case, print a single line containing the string `"YES"` if it is possible to express $N$ as a sum of two semi-primes or `"NO"` otherwise.

### Constraints 
- $1 \le T \le 200$
- $1 \le N \le 200$

### Example Input
```
3
30
45
62
```

### Example Output
```
YES
YES
NO
```

### Explanation
**Example case 1:** $N=30$ can be expressed as $15 + 15 = (3 \cdot 5) + (3 \cdot 5)$.

**Example case 2:** $45$ can be expressed as $35 + 10 = (5 \cdot 7) + (2 \cdot 5)$.

**Example case 3:** $62$ cannot be expressed as a sum of two semi-primes.
