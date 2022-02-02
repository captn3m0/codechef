---
{"category_name":"medium","problem_code":"MINIONS","problem_name":"Masha and Minions","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.6","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"PYP3","47":"CLOJ","48":"COB","49":"FS"},"max_timelimit":1.5,"source_sizelimit":50000,"problem_author":"barenuz","problem_tester":null,"date_added":"13-06-2018","tags":{"0":"barenuz","1":"cook95","2":"medium","3":"mgch","4":"segment"},"editorial_url":"https://discuss.codechef.com/problems/MINIONS","time":{"view_start_date":1529260205,"submit_start_date":1529260205,"visible_start_date":1529260205,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3>Read problems statements in <a href="http://www.codechef.com/download/translated/COOK95/mandarin/MINIONS.pdf" target="_blank">Mandarin chinese</a>, <a href="http://www.codechef.com/download/translated/COOK95/russian/MINIONS.pdf" target="_blank">Russian</a> and <a href="http://www.codechef.com/download/translated/COOK95/vietnamese/MINIONS.pdf" target="_blank">Vietnamese</a> as well.</h3>

Masha has $N$ minions. Each minion has two characteristics: power $a$ and endurance $b$. Masha thinks that a non-empty set of minions $\{m_1, m_2, \dots, m_k\}$ with characteristics $(a_{m_1},b_{m_1}), (a_{m_2},b_{m_2}), \dots, (a_{m_k},b_{m_k})$ is *good* if the mean endurance of this set doesn't exceed the minimum power in it, i.e. if $min(a_{m_1}, a_{m_2}, \dots, a_{m_k}) \ge (b_{m_1}+b_{m_2}+\dots+b_{m_k}) / k$.

Masha would like to choose a good subset of her minions and give these minions to Mark. Your task is to calculate the maximum number of minions Masha can give to Mark.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains a single integer $N$.
- The following $N$ lines describe minions. Each of these lines contains two space-separated integers $a$ and $b$ denoting the power and endurance of one minion.

### Output
For each test case, print a single line containing one number — the size of the largest good set of minions, or $0$ if no such set exists.

### Constraints 
- $1 \le T \le 1,000$
- $1 \le N \le 4\cdot10^5$
- $1 \le a, b \le 10^9$
- the sum of $N$ for all test cases does not exceed $4\cdot10^5$

### Example Input
```
2
3
1 4
3 3
2 1
2
3 5
1 4
```

### Example Output
```
2
0
```
	
### Explanation
**Example case 1:** The set of minions $\{2, 3\}$ is good, since $\mathrm{min}(3,2) \ge (3+1)/2$.

**Example case 2:** There is no non-empty good subset of minions.
