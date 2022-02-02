---
{"category_name":"easy","problem_code":"TREEUNAT","problem_name":"Tree Unattractiveness","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.6","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"PYP3","47":"CLOJ","48":"COB","49":"FS"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"admin2","problem_tester":null,"date_added":"13-11-2018","tags":{"0":"admin2","1":"cook100","2":"dynamic","3":"medium","4":"taran_1407","5":"tree"},"editorial_url":"https://discuss.codechef.com/problems/TREEUNAT","time":{"view_start_date":1542565802,"submit_start_date":1542565802,"visible_start_date":1542565802,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span>###Read problems statements in [Hindi](http://www.codechef.com/download/translated/CK100TST/hindi/TREEUNAT.pdf), [Mandarin Chinese](http://www.codechef.com/download/translated/CK100TST/mandarin/TREEUNAT.pdf), [Russian](http://www.codechef.com/download/translated/CK100TST/russian/TREEUNAT.pdf), [Vietnamese](http://www.codechef.com/download/translated/CK100TST/vietnamese/TREEUNAT.pdf) and [Bengali](http://www.codechef.com/download/translated/CK100TST/bengali/TREEUNAT.pdf) as well.

You are given a tree with $N$ vertices (numbered $1$ through $N$) and a bag with $N$ markers. There is an integer written on each marker; each of these integers is $0$, $1$ or $2$. You must assign exactly one marker to each vertex.

Let's define the *unattractiveness* of the resulting tree as the maximum absolute difference of integers written on the markers in any two vertices which are connected by an edge.

Find the minimum possible unattractiveness of the resulting tree.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains a single integer $N$.
- The second line contains $N$ space-separated integers denoting the numbers on markers in the bag.
- Each of the next $N-1$ lines contains two space-separated integers $u$ and $v$ denoting an edge between vertices $u$ and $v$.

### Output
For each test case, print a single line containing one integer — the minimum unattractiveness.

### Constraints
- $1 \le T \le 30$
- $1 \le N \le 100$
- $1 \le u, v \le N$
- the graph described on the input is a tree

### Example Input
```
3
3
0 1 1
1 2
1 3
3
0 1 2
1 2
1 3
4
2 2 2 2
1 2
1 3
3 4
```

### Example Output
```
1
1
0
```

### Explanation
**Example case 1:**
