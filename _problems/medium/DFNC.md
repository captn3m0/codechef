---
{"category_name":"medium","problem_code":"DFNC","problem_name":"D-Function","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"3 1 3 5\n4\n2 3 1","output":231,"explanation":"","isDeleted":false}}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"PYTH","5":"PYP3","6":"CS2","7":"ADA","8":"PYPY","9":"TEXT","10":"PAS fpc","11":"NODEJS","12":"RUBY","13":"PHP","14":"GO","15":"HASK","16":"TCL","17":"PERL","18":"SCALA","19":"LUA","20":"kotlin","21":"BASH","22":"JS","23":"LISP sbcl","24":"rust","25":"PAS gpc","26":"BF","27":"CLOJ","28":"R","29":"D","30":"CAML","31":"FORT","32":"ASM","33":"swift","34":"FS","35":"WSPC","36":"LISP clisp","37":"SQL","38":"SCM guile","39":"PERL6","40":"ERL","41":"CLPS","42":"ICK","43":"NICE","44":"PRLG","45":"ICON","46":"COB","47":"SCM chicken","48":"PIKE","49":"SCM qobi","50":"ST","51":"NEM"},"max_timelimit":3,"source_sizelimit":50000,"problem_author":"kmaaszraa","problem_tester":null,"date_added":"14-10-2019","tags":{"0":"cook111","1":"kmaaszraa","2":"matrix","3":"medium","4":"taran_1407"},"problem_difficulty_level":"Medium-Hard","best_tag":"Matrix Exponentiation","editorial_url":"https://discuss.codechef.com/problems/DFNC","time":{"view_start_date":1571596202,"submit_start_date":1571596202,"visible_start_date":1571596202,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=DFNC","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problems statements in [Hindi](https://www.codechef.com/download/translated/COOK111/hindi/DFNC.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/COOK111/mandarin/DFNC.pdf), [Russian](https://www.codechef.com/download/translated/COOK111/russian/DFNC.pdf), [Vietnamese](https://www.codechef.com/download/translated/COOK111/vietnamese/DFNC.pdf), and [Bengali](https://www.codechef.com/download/translated/COOK111/bengali/DFNC.pdf) as well.

Dr.D is tired of making up stories, so here is the formal description of this problem :

You are given a set $S = \{S_1, S_2, \ldots, S_K\}$, an integer $X$ and a sequence $A_1, A_2, \ldots, A_M$. Let's define an infinite sequence $W_1, W_2, \ldots$: for each valid $i$, $W_i = A_{((i-1) \% M) + 1}$. Then, let's define a function $F(i)$ for any non-negative integer $i$ in the following way:
- $F(0) = X$
- if $i \in S$, $F(i) = 0$
- otherwise, for $i \neq 0$, $F(i) = \left(\sum_{j=1}^i F(i-j) \cdot W_j \right) \% (10^9+7)$

Find the value of $F(N)$.

### Input
- The first line of the input contains four space-separated integers $X$, $K$, $M$ and $N$.
- The second line contains $K$ space-separated integers $S_1, S_2, \ldots, S_K$.
- The third line contains $M$ space-separated integers $A_1, A_2, \ldots, A_M$.

### Output
Print a single line containing one integer $F(N)$.

### Constraints
- $0 \le X \lt 10^9+7$
- $0 \le K \le 200$
- $1 \le M \le 200$
- $0 \le N \le 10^{18}$
- $0 \le A_i \lt 10^9+7$ for each valid $i$
- $1 \le S_i \le N$ for each valid $i$

### Example Input
```
3 1 3 5
4
2 3 1
```

### Example Output
```
231
```

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>