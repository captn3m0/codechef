---
{"category_name":"hard","problem_code":"HAMEL","problem_name":"Hamel Paths","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.5","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"CLOJ","47":"COB","48":"FS"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"alei","problem_tester":null,"date_added":"15-04-2018","tags":{"0":"alei","1":"augmenting","2":"cook93","3":"euler","4":"hard","5":"matroid","6":"spanningtree"},"editorial_url":"https://discuss.codechef.com/problems/HAMEL","time":{"view_start_date":1524421800,"submit_start_date":1524421800,"visible_start_date":1524421800,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3>Read problem statement in <a target="_blank" 
href="http://www.codechef.com/download/translated/COOK93/mandarin/HAMEL.pdf">Mandarin chinese</a> and <a target="_blank" 
href="http://www.codechef.com/download/translated/COOK93/vietnamese/HAMEL.pdf">Vietnamese</a>.</h3>

Chefsberg consists of $N$ islands numbered $1$ through $N$ connected by $M$ bridges numbered $1$ through $M$ (in the order in which they are given in the input). Chefsberg was designed by the best coders of the world, and they decided to create the bridges in a way that makes Chefsberg extremely connected. In particular, it is always necessary to remove more than $3$ bridges to disconnect Chefsberg.

In his free time, Suzumo keeps trying to find a way to visit all islands without crossing the same bridge twice (crossing it once in each direction is also forbidden).

Help Suzumo find a valid route. Remember that we are not in Königsberg, but in Chefsberg, so we don't want to cross each bridge, but visit each island. Also, we are not helping Hamilton, but Suzumo, so it is allowed to visit the same island multiple times.

It is guaranteed that under the given constraints, at least one valid route exists.

### Input

- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows. 
- The first line of each test case contains two space-separated integers $N$ and $M$ denoting the number of islands and the number of bridges.
- Each of the following $M$ lines contains two space-separated integers $u$ and $v$ representing a bidirectional bridge between islands $u$ and $v$.

### Output

For each test case, print a single line. This line should start with an integer $s$ denoting the number of bridges in your chosen route, followed by $s$ space-separated integers — the indices of the bridges in the order in which they should be crossed.

For any given sequence of bridges, there are two possible choices of the starting island. Your answer will be considered correct if at least one of them produces a valid route.

### Constraints 
- $2 \le T \le 64$
- $2 \le N \le 64$
- $1 \le M \le { {64} \choose {2} }$
- $1 \le u, v \le N$
- there can be multiple bridges between the same pair of islands
- there is no bridge connecting an island to itself

### Example Input
```
1
8 16
1 2
1 5
1 4
1 4
2 3
2 3
2 6
3 7
3 4
4 8
5 6
5 6
5 8
6 7
7 8
7 8
```

### Example Output
```
9 2 11 12 13 15 16 10 9 5
```

### Explanation

**Example case 1:**

<img src="https://codechef_shared.s3.amazonaws.com/download/upload/COOK93/hamel.png"></img>

The structure of Chefsberg is described in the picture above. The bridges used by the route are highlighted in yellow.
