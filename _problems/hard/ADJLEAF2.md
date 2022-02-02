---
{"category_name":"hard","problem_code":"ADJLEAF2","problem_name":"Adjacent Leaves ","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.6","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"PYP3","47":"CLOJ","48":"COB","49":"FS"},"max_timelimit":2.5,"source_sizelimit":50000,"problem_author":"kingofnumbers","problem_tester":null,"date_added":"7-12-2018","tags":{"0":"auxiliary","1":"dynamic","2":"kingofnumbers","3":"snckel19","4":"taran_1407"},"editorial_url":"https://discuss.codechef.com/problems/ADJLEAF2","time":{"view_start_date":1544295600,"submit_start_date":1544295600,"visible_start_date":1544295600,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span>###Read problems statements in [Hindi](http://www.codechef.com/download/translated/S19ELTST/hindi/ADJLEAF2.pdf), [Mandarin Chinese](http://www.codechef.com/download/translated/S19ELTST/mandarin/ADJLEAF2.pdf), [Russian](http://www.codechef.com/download/translated/S19ELTST/russian/ADJLEAF2.pdf), [Vietnamese](http://www.codechef.com/download/translated/S19ELTST/vietnamese/ADJLEAF2.pdf) and [Bengali](http://www.codechef.com/download/translated/S19ELTST/bengali/ADJLEAF2.pdf) as well.

Consider a rooted tree. A leaf in this tree is a vertex that does not have any children. Suppose that we perform a depth-first search from the root and write down the numbers of all leaves in the order in which they are visited. Since the order of visiting the sons of any vertex during the search is not fixed, many different sequences of leaves may be created. We call a subset of all leaves *good* if it is non-empty and there is at least one sequence of leaves such that the leaves from this subset (in some order) form its contiguous subsequence.

You are given a tree with $N$ vertices numbered $1$ through $N$. You should answer $Q$ queries. In each query, you are given a vertex $R$ and a set of leaves $S$; you should find out whether $S$ is a good set when the tree is rooted at $R$.

### Input
- The first line of the input contains two space-separated integers $N$ and $Q$.
- Each of the next $N-1$ lines contains two space-separated integers $u$ and $v$ describing an edge in the tree.
- The next $Q$ lines describe queries. Each of these lines contains two space-separated integers $R$ and $K$, followed by a space and $K$ space-separated integers $s_1, s_2, \dots, s_K$ denoting the leaves in $S$.

### Output
For each query, print a single line containing the string `"YES"` if the given set is good or `"NO"` otherwise.

### Constraints 
- $3 \le N \le 5 \cdot 10^5$
- $1 \le Q \le 5 \cdot 10^5$
- $1 \le R \le N$
- $1 \le K \le N$
- $1 \le s_i \le N$ for each valid $i$
- all elements of $S$ are distinct leaves
- vertex $R$ has at least two adjacent vertices
- the sum of $K$ over all queries does not exceed $5 \cdot 10^5$ 

### Example Input
```
10 2
1 2
1 3
1 4
2 5
2 6
3 7
3 8
4 9
4 10
1 2 9 10
1 3 5 7 9
```

### Example Output
```
YES
NO
```
