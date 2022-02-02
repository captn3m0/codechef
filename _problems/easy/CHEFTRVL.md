---
{"category_name":"easy","problem_code":"CHEFTRVL","problem_name":"Difficult Choice","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.5","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"CLOJ","47":"COB","48":"FS"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"hloya_ygrt","problem_tester":null,"date_added":"9-05-2018","tags":{"0":"cook94","1":"hloya_ygrt","2":"xor"},"editorial_url":"https://discuss.codechef.com/problems/CHEFTRVL","time":{"view_start_date":1526841000,"submit_start_date":1526841000,"visible_start_date":1526841000,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3>Read problems statements in <a href="http://www.codechef.com/download/translated/COOK94/mandarin/CHEFTRVL.pdf" target="_blank">Mandarin chinese</a>, <a href="http://www.codechef.com/download/translated/COOK94/russian/CHEFTRVL.pdf" target="_blank">Russian</a> and <a href="http://www.codechef.com/download/translated/COOK94/vietnamese/CHEFTRVL.pdf" target="_blank">Vietnamese</a> as well.</h3>


Chef and his mother are going travelling. Chef's world consists of $N$ cities (numbered $1$ through $N$) connected by $N-1$ bidirectional roads such that each city can be reached from any other city using roads. For each city, we know its age — the number of years elapsed since the foundation of the city; let's denote the age of city $i$ by $a_i$.

First of all, Chef and his mother have to decide what city they should visit first. Suppose that Chef chooses a city $c_c$ and his mother chooses a (not necessarily different) city $c_m$. The *difference* of their choices is the number of different bits in the binary representations of $a_{c_c}$ and $a_{c_m}$.

Chef will not argue with his mother if the parity of this difference is not equal to the parity of the length of the shortest path between cities $c_c$ and $c_m$ (the number of roads on the shortest path between them). Find the number of ways to choose the cities $c_c$ and $c_m$ such that Chef avoids quarreling with his mother.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains a single integer $N$. 
- Each of the following $N-1$ lines contains two space-separated integers $A$ and $B$ denoting a road between cities $A$ and $B$.
- The last line contains $N$ space-separated integers $a_1, a_2, \dots, a_N$.

### Output
For each test case, print a single line containing one integer — the number of valid pairs $c_c, c_m$.

### Constraints 
- $1 \le T \le 10$
- $1 \le N \le 10^5$
- $1 \le A, B \le N$
- $0 \le a_i \le 10^9$ for each valid $i$

### Sample Input
```
1
3
1 2
1 3
1 2 3
```

### Sample Output
```
2
```

### Explanation
**Example case 1:** The two possible choices are $c_c=2, c_m=3$ (their binary representations differ by one bit, the shortest path has length $2$) and $c_c=1, c_m=2$ (there are two different bits in their binary representations and the shortest path has length $1$).
