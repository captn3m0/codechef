---
{"category_name":"medium","problem_code":"CLTREE","problem_name":"Paths","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.6","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"PYP3","47":"CLOJ","48":"COB","49":"FS"},"max_timelimit":1.5,"source_sizelimit":50000,"problem_author":"meooow","problem_tester":null,"date_added":"24-02-2019","tags":{"0":"centroid","1":"cole2019","2":"medium","3":"meooow"},"editorial_url":"https://discuss.codechef.com/problems/CLTREE","time":{"view_start_date":1551205800,"submit_start_date":1551205800,"visible_start_date":1551205800,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span>


Chef lives in Treeland which, as the name implies, is shaped like a [tree](https://en.wikipedia.org/wiki/Tree_(data_structure)).

Chef's home, his school, and the playground where he likes to play are located on three different vertices in this tree. Chef tells you that every morning he walks across $x$ edges on the simple path from his home to his school. In the afternoon, he walks along the simple path from his school to the playground crossing $y$ edges. And in the evening, he walks back home across $z$ edges on the simple path from the playground to his home.

You have a map of Treeland where each vertex is labelled from $1$ to $n$. Find the number of triplets $(a, b, c)$ such that vertices $a, b, c$ could be Chef's home, his school and the playground respectively. If there is no such triplet, Chef may have miscounted some edges and you should output $0$.

### Input

- The first line contains $t$, the number of test cases. $t$ cases follow.
- The first line of each test case contains four integers $n, x, y, z$.
- $n - 1$ lines follow, each with a pair of integers $u$ and $v$ denoting that there is an edge between $u$ and $v$.

### Output

- For each testcase, output a single line containing the number of triplets which satisfy Chef's description.

### Constraints

- $1 \leq t \leq 1000$
- $3 \leq n \leq 10^5$
- $1 \leq x, y, z \leq n - 1$
- Sum of $n$ over all test cases does not exceed $10^5$.

### Sample Input

    2
    7 4 3 3
    1 2
    2 3
    3 4
    4 5
    3 6
    3 7
    3 2 2 2
    1 2
    1 3

### Sample Output

    4
    0
	
### Explanation

**Case 1:** There are 4 possibilities as illustrated below. Consider the orange vertex as Chef's home, the green vertex as Chef's school, and the blue vertex as the playground.  
![sample](https://codechef_shared.s3.amazonaws.com/download/HYC/External_contest_images/COLE2019/CLTREE/paths_sample.png)

**Case 2:** There are no triplets that satisfy Chef's description.