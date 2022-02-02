---
{"category_name":"medium","problem_code":"CATS","problem_name":"Cats and Tree","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.6","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"PYP3","47":"CLOJ","48":"COB","49":"FS"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"bciobanu","problem_tester":null,"date_added":"9-02-2019","tags":{"0":"bciobanu","1":"binary","2":"easy","3":"snckfl19"},"editorial_url":"https://discuss.codechef.com/problems/CATS","time":{"view_start_date":1550311200,"submit_start_date":1550311200,"visible_start_date":1550311200,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span>### Read problem statements in [Hindi](http://www.codechef.com/download/translated/SNCKFL19/hindi/CATS.pdf), [Bengali](http://www.codechef.com/download/translated/SNCKFL19/bengali/CATS.pdf), [Mandarin Chinese](http://www.codechef.com/download/translated/SNCKFL19/mandarin/CATS.pdf), [Russian](http://www.codechef.com/download/translated/SNCKFL19/russian/CATS.pdf), and [Vietnamese](http://www.codechef.com/download/translated/SNCKFL19/vietnamese/CATS.pdf) as well.

You are given a rooted tree with $N$ nodes labelled $1$ through $N$. For each non-root node $i$, let's denote the direct parent of this node by $p_i$.

$N$ cats, also labelled $1$ through $N$, have vanished from Chef's home. The cats are frightened, so they want to climb the tree one by one, in the order $C_1, C_2, \ldots, C_N$. At any time, each node may contain at most one cat. When cat $c$ wants to start climbing the tree, the following happens:
- If there is already a cat in node $c$, then cat $c$ leaves and decides to climb another tree. Otherwise, the cat makes a leap to node $c$.
- Then, while there is no cat in the parent of this cat's current node, the cat jumps to the parent of its current node. When it is impossible to jump any further (due to reaching the root or finding a cat in the parent node), the cat stays in its current node.

Find the number of jumps performed by each cat (including the initial leap to the tree).

### Input
- The first line of the input contains a single integer $N$.
- The second line contains $N$ space-separated integers $p_1, p_2, \ldots, p_N$. The parent of the root will be denoted with a $0$.
- The third line contains $N$ space-separated integers $C_1, C_2, \ldots, C_N$.

### Output
Print $N$ lines. For each valid $i$, the $i$-th of these lines should contain a single integer — the number of jumps performed by cat $C_i$.

### Constraints 
- $1 \le N \le 3 \cdot 10^5$
- $0 \le p_i \le N$ for each valid $i$
- $C_1, C_2, \ldots, C_N$ form a permutation of $1, 2, \ldots, N$
- the graph described on the input is a tree

### Example Input
```
10
0 1 2 3 3 1 6 6 6 1
5 6 3 4 2 1 7 8 9 10
```

### Example Output
```
4
1
2
2
0
0
1
1
1
1
```

### Example Input
```
7
2 4 0 3 3 3 4
7 6 2 1 4 5 3
```

### Example Output
```
3
1
2
2
0
1
0
```
