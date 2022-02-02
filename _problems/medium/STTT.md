---
{"category_name":"medium","problem_code":"STTT","problem_name":"Standard Tree Task","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.6","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"PYP3","47":"CLOJ","48":"COB","49":"FS"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"allllekssssa","problem_tester":null,"date_added":"16-08-2018","tags":{"0":"allllekssssa","1":"bitmasking","2":"combinatorics","3":"cook","4":"cook97","5":"dynamic","6":"taran_1407"},"editorial_url":"https://discuss.codechef.com/problems/STTT","time":{"view_start_date":1534703400,"submit_start_date":1534703400,"visible_start_date":1534703400,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3>Read problems statements in <a <a href="http://www.codechef.com/download/translated/COOK97/mandarin/STTT.pdf" target="_blank">Mandarin chinese</a>
, <a href="http://www.codechef.com/download/translated/COOK97/russian/STTT.pdf" target="_blank">Russian</a> and <a href="http://www.codechef.com/download/translated/COOK97/vietnamese/STTT.pdf" target="_blank">Vietnamese</a> as well.</h3>


There's no story in this problem, it's time for trees!

The company structure of ShareChat can be viewed as a tree with $N$ nodes (numbered $1$ through $N$); node $1$ is the root of this tree. You should choose a (possibly empty) subset of nodes and place one coin in each node from this set. We call the tree *proper* if the following condition holds:
- Consider two arbitrary disjont subtrees. Let's denote the total number of coins in one subtree by $X$ and the total number of coins in the other subtree by $Y$.
- If $X > 0$ and $Y > 0$, the greatest common divisior (GCD) of $X$ and $Y$ must be $1$.

Please calculate the number of different assignments of coins to nodes (different sets of nodes containing coins) such that the resulting tree is proper. Since the answer could be very big, compute it modulo $10^9+7$.

**Note:** A subtree is the tree formed by some node $v$ and all (direct or indirect) descendants of $v$. Two subtrees are disjont if they do not have any common node.

### Input
- The first line of the input contains a single integer $N$ denoting the number of nodes in the tree.
- The second line contains $N-1$ space-separated integers $p_2, p_3, \dots, p_N$, where $p_i$ denotes the parent of node $i$.

### Output
Print a single line containing one integer — the number of assignments of coins to nodes which form a proper tree, modulo $10^9+7$.

### Constraints
- $1 \le N \le 70$
- $1 \le p_i \lt i$ for each valid $i$

### Example Input
```
5
1 1 2 3
```

### Example Output
```
30
```

### Explanation
There are only two ways to assign coins to nodes such that the resulting tree is not proper. Both contain coins in nodes $2$, $3$, $4$, $5$ and one of them contains a coin in node $1$ too.
