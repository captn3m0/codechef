---
{"category_name":"school","problem_code":"CV","problem_name":"CV","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.6","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"PYP3","47":"CLOJ","48":"R","49":"COB","50":"FS"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"vivek_1998299","problem_tester":null,"date_added":"16-05-2019","tags":{"0":"bruteforce","1":"cakewalk","2":"ltime72","3":"taran_1407","4":"vivek_1998299"},"time":{"view_start_date":1558803600,"submit_start_date":1558803600,"visible_start_date":1558803600,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span>### Read problem statements in [Hindi](http://www.codechef.com/download/translated/LTIME72/hindi/CV.pdf), [Bengali](http://www.codechef.com/download/translated/LTIME72/bengali/CV.pdf), [Mandarin Chinese](http://www.codechef.com/download/translated/LTIME72/mandarin/CV.pdf), [Russian](http://www.codechef.com/download/translated/LTIME72/russian/CV.pdf), and [Vietnamese](http://www.codechef.com/download/translated/LTIME72/vietnamese/CV.pdf) as well.

Chef has a string $S$ with length $N$. He needs to find the number of indices $i$ ($1 \le i \le N-1$) such that the $i$-th character of this string is a consonant and the $i+1$-th character is a vowel. However, he is busy, so he asks for your help.

Note: The letters 'a', 'e', 'i', 'o', 'u' are vowels; all other lowercase English letters are consonants.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains a single integer $N$.
- The second line contains a single string $S$ with length $N$.

### Output
For each test case, print a single line containing one integer ― the number of occurrences of a vowel immediately after a consonant.

### Constraints
- $1 \le T \le 100$
- $1 \le N \le 100$
- $S$ contains only lowercase English letters

### Subtasks
**Subtask #1 (100 points):** original constraints

### Example Input
```
3
6
bazeci
3
abu
1
o
```

### Example Output
```
3
1
0
```

### Explanation
**Example case 1:** The vowel 'a' follows after the consonant 'b', 'e' follows after 'z' and 'i' follows after 'c', so the answer is $3$.

**Example case 2:** The only vowel 'u' follows after 'b', so the answer is $1$.
