---
{"category_name":"medium","problem_code":"XORCMPNT","problem_name":"Bitsetbaba and Power Grid","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.6","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"PYP3","47":"CLOJ","48":"R","49":"COB","50":"FS"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"solaimanope","problem_tester":null,"date_added":"13-05-2019","tags":{"0":"cook","1":"cook106","2":"solaimanope"},"editorial_url":"https://discuss.codechef.com/problems/XORCMPNT","time":{"view_start_date":1558290720,"submit_start_date":1558290720,"visible_start_date":1558290720,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span>### Read problems statements in [Hindi](http://www.codechef.com/download/translated/COOK106/hindi/XORCMPNT.pdf), [Mandarin Chinese](http://www.codechef.com/download/translated/COOK106/mandarin/XORCMPNT.pdf), [Russian](http://www.codechef.com/download/translated/COOK106/russian/XORCMPNT.pdf), [Vietnamese](http://www.codechef.com/download/translated/COOK106/vietnamese/XORCMPNT.pdf) and [Bengali](http://www.codechef.com/download/translated/COOK106/bengali/XORCMPNT.pdf) as well.

Bitsetbaba Ashiq works in a power grid, which consists of $2^K$ power stations (numbered $0$ through $2^K-1$). Initially, there are no connections between the power stations.

One day, Ashiq's boss gave him $M$ integers $x_1, x_2, \ldots, x_M$ and asked Ashiq to add connections between some power stations. For each two different power stations $u$ and $v$, Ashiq should connect them directly if there is a valid index $i$ such that $u \oplus v = x_i$. Here, $\oplus$ denotes the bitwise XOR operation.

To confirm whether Ashiq has completed the task correctly, he should report to his boss the number of connected components in the resulting power grid. Two power stations $u$ and $v$ are in the same connected component if they are connected directly or indirectly (through other stations).

Ashiq is lazy and he does not want to actually physically perform the task, but he also wants to keep his job. Therefore, he asks for your help. Can you help him find the final number of connected components?

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains two space-separated integers $K$ and $M$.
- The second line contains $M$ space-separated integers $x_1, x_2, \ldots, x_M$.

### Output
For each test case, print a single line containing one integer — the number of connected components.

### Constraints 
- $1 \le T \le 10^5$
- $1 \le K \le 30$ 
- $1 \le M \le 10^5$
- $0 \le x_i \lt 2^K$ for each valid $i$
- the sum of $M$ over all test cases does not exceed $10^5$

### Example Input
```
2
2 1
0
2 1
2
```

### Example Output
```
4
2
```

### Explanation
**Example case 1:** There are four connected components; each of them contains one of the four nodes.

**Example case 2:** There are two connections — one between nodes $0$ and $2$ and the other between nodes $1$ and $3$. Thus, there are two connected components.
