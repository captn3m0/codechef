---
{"category_name":"medium","problem_code":"GRAPHTRE","problem_name":"Families of Chefland","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.6","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"PYP3","47":"CLOJ","48":"COB","49":"FS"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"deva2802","problem_tester":null,"date_added":"21-02-2019","tags":{"0":"deva2802","1":"dynamic","2":"easy","3":"graph","4":"ltime69"},"editorial_url":"https://discuss.codechef.com/problems/GRAPHTRE","time":{"view_start_date":1550941202,"submit_start_date":1550941202,"visible_start_date":1550941202,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span>###Read problems statements [Mandarin](http://www.codechef.com/download/translated/LTIME69/mandarin/GRAPHTRE.pdf) , [Bengali](http://www.codechef.com/download/translated/LTIME69/bengali/GRAPHTRE.pdf) , [Hindi](http://www.codechef.com/download/translated/LTIME69/hindi/GRAPHTRE.pdf) , [Russian](http://www.codechef.com/download/translated/LTIME69/russian/GRAPHTRE.pdf) and [Vietnamese](http://www.codechef.com/download/translated/LTIME69/vietnamese/GRAPHTRE.pdf) as well.

Chefland is inhabited by chefs, which have only one gender. Each chef can, alone, give birth to many younger chefs, which can then give birth to even younger chefs, and so on. It is easy to see that the family structure of any chef (formed by this chef's direct and indirect descendants) is a tree.

A *family* is a tree such that its root does not have a parent, i.e. it is not a proper subtree of any tree. In a *valid* family tree, the age of each chef that has a parent is strictly smaller than the age of this chef's parent. The *respect of a family* is the age of the oldest chef in this family. The *respect of Chefland* is the sum of respects of all families in Chefland.

A long time ago, there were several families in Chefland. All their data was stored in the Cookbook; the families were represented by listing all the (undirected) edges in all family trees and the ages of all chefs. Since all family trees were valid, it was always possible to deduce the exact parent-child relations.

Over many years, the book got contaminated — people added some extra edges (possibly zero) between some chefs. Currently, there are $N$ chefs in the book (numbered $1$ through $N$; note that no chefs were added) and $M$ undirected edges between them.

Young Chef is now wondering: what could the respect of Chefland have been, as originally described in the Cookbook? Consider all ways to remove a (possibly empty) set of edges such that the resulting graph contains only valid families. For each possible $k$, find the sum of respects of Chefland over all the ways such that the resulting graph contains exactly $k$ families. Since these numbers may be large, compute them modulo $10^9 + 7$.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains two space-separated integers $N$ and $M$.
- The second line contains $N$ space-separated integers $A_1, A_2, \ldots, A_N$, where $A_i$ denotes the age of the $i$-th chef.
- Each of the next $M$ lines contains two space-separated integers $U$ and $V$ denoting an edge in the Cookbook between chefs $U$ and $V$.

### Output
For each test case, print a single line containing $N$ space-separated integers. For each valid $k$, the $k$-th of these integers should denote the sum of respects over all the ways to remove edges such that the number of families is exactly $k$, modulo $10^9+7$.

### Constraints 
- $1 \le T \le 50$
- $2 \le N \le 5,000$
- $1 \le M \le 5 \cdot 10^5$
- $1 \le A_i \le 10^9$ for each valid $i$
- $1 \le U, V \le N$
- the sum of $N$ over all test cases does not exceed $5,000$
- the sum of $M$ over all test cases does not exceed $5 \cdot 10^5$
- the graph described on the input does not contain any self-loops or multiple edges

### Subtasks
**Subtask #1 (10 points):** 
- the sum of $N$ over all test cases does not exceed $50$
- the sum of $M$ over all test cases does not exceed $18$

**Subtask #2 (20 points):** the graph described on the input is a valid family 

**Subtask #3 (70 points):** original constraints

### Example Input
```
2
2 1
1 2
1 2
3 2
3 2 4
1 2
2 3
```

### Example Output
```
2 3
0 14 9
```

### Explanation
**Example case 1:** There is one way to have exactly $1$ family and the respect of that family must be $2$.

There is one way to have exactly $2$ families. These families must have respects $1$ and $2$, so the respect of Chefland for $2$ families must be $1 + 2 = 3$.

**Example case 2:** There is no way to have exactly $1$ family.

There are two ways to have $2$ families, with respects $3$ and $4$ (the same for both ways). Therefore, the answer for $2$ families is $2 \cdot (3 + 4) = 14$.

There is only one way to have $3$ families, with respects $3$, $2$ and $4$. Therefore, the respect of Chefland for $3$ families must be $3 + 2 + 4 = 9$.
