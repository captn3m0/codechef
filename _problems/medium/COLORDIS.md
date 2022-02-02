---
{"category_name":"medium","problem_code":"COLORDIS","problem_name":"Nearest Color","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.6","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"PYP3","47":"CLOJ","48":"R","49":"COB","50":"FS"},"max_timelimit":8,"source_sizelimit":50000,"problem_author":"anachor","problem_tester":null,"date_added":"15-05-2019","tags":{"0":"anachor","1":"cook","2":"cook106"},"editorial_url":"https://discuss.codechef.com/problems/COLORDIS","time":{"view_start_date":1558290720,"submit_start_date":1558290720,"visible_start_date":1558290720,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span>### Read problems statements in [Hindi](http://www.codechef.com/download/translated/COOK106/hindi/COLORDIS.pdf), [Mandarin Chinese](http://www.codechef.com/download/translated/COOK106/mandarin/COLORDIS.pdf), [Russian](http://www.codechef.com/download/translated/COOK106/russian/COLORDIS.pdf), [Vietnamese](http://www.codechef.com/download/translated/COOK106/vietnamese/COLORDIS.pdf) and [Bengali](http://www.codechef.com/download/translated/COOK106/bengali/COLORDIS.pdf) as well.

You have to process $Q$ queries on a rooted tree. Each node of the tree has a label and a color. Initially, the tree consists of a single node (the root) with label $1$ and color $c_0$. There are two types of queries:
1. You are given an existing node $u$ and a color $c$. Let's denote the number of nodes in the tree before this query by $k$. Create a node with label $k+1$ and color $c$, and add it to the tree as a child of node $u$.
2. You are given a node $u$ and a color $c$. For each node with color $c$ (possibly including $u$), find its distance from node $u$. The answer to this query is the minimum of these distances, or $-1$ if there are no nodes with color $c$ in the tree.

The input is encoded so that you have to process these queries online.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains two space-separated integers $Q$ and $c_0$.
- Each of the following $Q$ lines contains a character $t$ followed by a space and two space-separated integers $u'$ and $c'$ describing a query.
    - The character $t$ is '+' for a query of the first type or '?' for a query of the second type.
    - Let's denote the answer to the last query of the second type by $a$ ($a = -1$ if there have been no queries of the second type so far). The parameters $u$ and $c$ of the current query can be computed as $u = u' \oplus (a+1)$ and $c = c' \oplus (a+1)$.

### Output
For each query of the second type, print a single line containing one integer — the answer to this query.

### Constraints 
- $1 \le Q \le 2 \cdot 10^5$
- the sum of $Q$ over all test cases does not exceed $4 \cdot 10^5$
- $t$ is '+' or '?'
- $u$ is a valid label of a node in the tree
- $1 \le c_0, c \le 2 \cdot 10^5$

### Example Input
```
2
6 1
+ 1 2
+ 2 3
+ 3 1
? 1 3
? 7 2
? 3 0
10 1
+ 1 2
? 1 1
? 3 0
? 0 6
+ 2 3
+ 2 4
? 3 4
+ 0 7
? 0 7
? 3 6
```

### Example Output
```
2
0
1
0
1
-1
2
1
2
```

### Explanation
**Example case 1:** The decoded queries are
```
+ 1 2
+ 2 3
+ 3 1
? 1 3
? 4 1
? 2 1
```

**Example case 2:** The decoded queries are
```
+ 1 2
? 1 1
? 2 1
? 2 4
+ 2 3
+ 2 4
? 3 4
+ 3 4
? 3 4
? 1 4
```
