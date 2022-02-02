---
{"category_name":"challenge","problem_code":"DLDAG","problem_name":"(Challenge) Delete DAG","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.6","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"PYP3","47":"CLOJ","48":"COB","49":"FS"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"fekete","problem_tester":null,"date_added":"14-11-2018","tags":{"0":"fekete"},"time":{"view_start_date":1545075122,"submit_start_date":1545075122,"visible_start_date":1545075122,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span>###Read problems statements [Hindi](http://www.codechef.com/download/translated/DEC18/hindi/DLDAG.pdf) , [Vietnamese](http://www.codechef.com/download/translated/DEC18/vietnamese/DLDAG.pdf) , [Mandarin Chinese](http://www.codechef.com/download/translated/DEC18/mandarin/DLDAG.pdf) , [Russian](http://www.codechef.com/download/translated/DEC18/russian/DLDAG.pdf) and [Bengali](http://www.codechef.com/download/translated/DEC18/bengali/DLDAG.pdf) as well.

You are given a directed acyclic graph with $N$ vertices (numbered $1$ through $N$) and $M$ edges. You want to destroy it all! To destroy the graph, you should delete all of its vertices. 

In one step, you are allowed to delete at most two vertices; you may only delete a vertex when there is no edge from it to another (not yet deleted) vertex. You may not delete two vertices when there is an edge between them either.

Find a way to destroy the graph in the minimum number of steps.

### Input
- The first line of the input contains two space-separated integers $N$ and $M$.
- Each of the next $M$ lines contains two space-separated integers $U$ and $V$ denoting an edge from vertex $U$ to vertex $V$.

### Output
- The first line of the output should contain a single integer $S$ denoting the minimum number of steps needed to destroy the graph.
- Each of the next $S$ lines should describe one step; it should contain an integer $K$ ($1 \le K \le 2$), followed by a space and $K$ space-separated integers denoting the numbers of vertices deleted in this step.

### Constraints 
- $1 \le N, M \le 10^6$
- the graph on the input does not contain any cycles or self-loops

### Scoring
The score for each test file is $10 \cdot (C/S)^2$, where $C$ is the number of steps in which you deleted exactly $2$ vertices. The final score of your submission is equal to the sum of scores for each test file.

There are twenty test cases. During the contest, the displayed score will account for exactly four test files, i.e. your score reflects your submission's performance on 20% (4/20) of the test files. However, if your program gets a non-AC verdict on any test file, your submission's verdict will be non-AC. In other words, an AC verdict denotes that your program runs successfully on all the test files. After the end of the contest, your score will be changed to include the sum of your program's scores over the other sixteen test files.

### Example Input
```
6 6
1 2
2 3
1 3
3 4
3 5
1 6
```

### Example Output
```
4
2 4 5
2 6 3
1 2
1 1
```
