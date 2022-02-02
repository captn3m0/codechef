---
{"category_name":"hard","problem_code":"STRSUM","problem_name":"Pairwise String Sums","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.6","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"PYP3","47":"CLOJ","48":"COB","49":"FS"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"lg5293","problem_tester":null,"date_added":"5-01-2019","tags":{"0":"hard","1":"implementation","2":"lg5293","3":"observations","4":"snckfl19"},"editorial_url":"https://discuss.codechef.com/problems/STRSUM","time":{"view_start_date":1550311200,"submit_start_date":1550311200,"visible_start_date":1550311200,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span>### Read problem statements in [Hindi](http://www.codechef.com/download/translated/SNCKFL19/hindi/STRSUM.pdf), [Bengali](http://www.codechef.com/download/translated/SNCKFL19/bengali/STRSUM.pdf), [Mandarin Chinese](http://www.codechef.com/download/translated/SNCKFL19/mandarin/STRSUM.pdf), [Russian](http://www.codechef.com/download/translated/SNCKFL19/russian/STRSUM.pdf), and [Vietnamese](http://www.codechef.com/download/translated/SNCKFL19/vietnamese/STRSUM.pdf) as well.

Consider the following task:
- You are given $N$ non-empty strings $s_1, s_2, \ldots, s_N$. These strings are not necessarily distinct.
- Let $L$ be the list of all strings formed by concatenating two of the given strings. More formally, start with an empty list and for each valid ordered pair $(i, j)$ such that $i \neq j$, add the string $s_i+s_j$ ($+$ denotes string concatenation) to this list. There may be multiple copies of any string in $L$.
- $L$ contains exactly $N \cdot (N-1)$ strings. Print these strings in an arbitrary order.

This problem is too easy, so you would like to solve the reverse problem: You are given $N \cdot (N-1)$ strings $l_1, l_2, \ldots, l_{N(N-1)}$. Determine if these strings form a possible output for the above problem with some input sequence $s_1, s_2, \ldots, s_N$ and if they do, find one such input sequence.

### Input
- The first line of the input contains a single integer $N$.
- $N \cdot (N-1)$ lines follow. For each $i$ ($1 \le i \le N \cdot (N-1)$), the $i$-th of these lines contains a single string $l_i$.

### Ouptut
If there is no solution, print a single line containing the string `"No"` (without quotes).

Otherwise, print $N+1$ lines. The first of these lines should contain the string `"Yes"` (without quotes). For each $i$ ($1 \le i \le N$), the $i$-th of the following $N$ lines should contain a single string $s_i$. If there are multiple possible solutions, you may print any one.

### Constraints
- $2 \le N \le 50$
- $2 \le |l_i| \le 10^4$ for each valid $i$
- $\sum_{i=1}^{N(N-1)} |l_i| \le 2 \cdot 10^4$
- each string contains only lowercase English letters

### Example Input 1
```
3
aba
baa
accc
ccca
cccba
baccc
```

### Example Output 1
```
Yes
ccc
a
ba
```

### Example Input 2
```
2
ax
xb
```

### Example Output 2
```
No
```
