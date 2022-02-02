---
{"category_name":"medium","problem_code":"CBFEAST","problem_name":"Colorblind Feast","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.6","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"PYP3","47":"CLOJ","48":"COB","49":"FS"},"max_timelimit":1.5,"source_sizelimit":50000,"problem_author":"tmwilliamlin","problem_tester":null,"date_added":"16-11-2018","tags":{"0":"tmwilliamlin"},"time":{"view_start_date":1545075122,"submit_start_date":1545075122,"visible_start_date":1545075122,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span>###Read problems statements [Hindi](http://www.codechef.com/download/translated/DEC18/hindi/CBFEAST.pdf) , [Vietnamese](http://www.codechef.com/download/translated/DEC18/vietnamese/CBFEAST.pdf) , [Mandarin Chinese](http://www.codechef.com/download/translated/DEC18/mandarin/CBFEAST.pdf) , [Russian](http://www.codechef.com/download/translated/DEC18/russian/CBFEAST.pdf) and [Bengali](http://www.codechef.com/download/translated/DEC18/bengali/CBFEAST.pdf) as well.

Chef is serving dishes at a feast full of colorblind people. He is adding dishes one by one to a long table to form a sequence of dishes; for each dish he adds, we know its color and deliciousness. A person with *colorblindness* $c$ can only see dishes with colors in the range $[c-K, c+K]$.

You should process $Q$ queries. There are three types of queries:
- $1\;c\;d$: Chef adds a dish with color $c$ and deliciousness $d$ to the front of the sequence.
- $2\;c\;d$: Chef adds a dish with color $c$ and deliciousness $d$ to the back of the sequence.
- $3\;c$: Consider a person with colorblindness $c$. This person must choose an arbitrary contiguous subsequence of dishes on the table (possibly empty) and then eat all the dishes which this person can see. Chef wants to know the maximum possible total (summed up) deliciousness of the eaten dishes.

Note that all the people attending this feast are polite, so no dishes are actually eaten until Chef receives the answers to all of his queries. 

### Input
- The first line of the input contains two space-separated integers $Q$ and $K$.
- The following $Q$ lines describe queries. Each of these lines starts with two space-separated integers $b$ and $C$, where $b$ denotes the type of this query. If $b = 1$ or $b = 2$, they are followed by a space and an integer $d$. The value of $c$ for this query is computed as $c = C \oplus ans$, where $ans$ is the answer to the previous query of type $3$ or $0$ if there have not been any queries of type $3$ so far.

### Output
For each query of type $3$, print a single line containing one integer — the maximum total deliciousness.

### Constraints
- $1 \le Q \le 2 \cdot 10^5$
- $1 \le c, K \le 10^9$
- $|d| \le 10^3$

### Subtasks
**Subtask #1 (10 points):** $Q \le 2,000$

**Subtask #2 (10 points):** $d \gt 0$

**Subtask #3 (80 points):** no additional constraints

### Example Input 1
```
7 1
1 1 1
3 2
3 2
1 3 1
1 1 2
3 3
3 0
```

### Example Output 1
```
1
0
1
3
```

### Explanation 1
The decoded queries are:
```
1 1 1
3 2
3 3
1 3 1
1 1 2
3 3
3 1
```

### Example Input 2
```
4 2
1 1 -3
2 5 5
1 4 4
3 3
```

### Example Output 2
```
6
```
