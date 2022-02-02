---
{"category_name":"challenge","problem_code":"ANTS","problem_name":"Ants (Challenge) ","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":5,"source_sizelimit":50000,"problem_author":"alei","problem_tester":"","date_added":"24-07-2020","tags":{"0":"alei"},"problem_difficulty_level":"Unavailable","best_tag":"","editorial_url":"","time":{"view_start_date":1597656602,"submit_start_date":1597656602,"visible_start_date":1597656602,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=ANTS","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Hindi](https://www.codechef.com/download/translated/AUG20/hindi/ANTS.pdf), [Bengali](https://www.codechef.com/download/translated/AUG20/bengali/ANTS.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/AUG20/mandarin/ANTS.pdf), [Russian] (https://www.codechef.com/download/translated/AUG20/russian/ANTS.pdf), and [Vietnamese](https://www.codechef.com/download/translated/AUG20/vietnamese/ANTS.pdf) as well.

You are given a directed weighted graph with $N$ vertices (numbered $1$ through $N$) and $M$ edges (numbered $1$ through $M$). For each valid $i$, the $i$-th edge is initially directed from a vertex $u_i$ to a vertex $v_i$ and it has a *flipping cost* $W_i$. There is one ant living in each vertex of the graph.

Let's denote a directed edge from a vertex $u$ to a vertex $v$ by $(u, v)$. The outdegree of a vertex $u$ is the number of vertices $v$ such that there is an edge $(u, v)$ in the graph. A vertex $u$ is adjacent to a vertex $v$ if there is an edge $(u, v)$ in the graph.

The queen of ants wants to gather all ants in at most $K$ distinct vertices. In order to do that, she may perform the following instructions in any order, any number of times:
- `1 i`: Flip the $i$-th edge ― if the edge was $(u, v)$ before this instruction, it becomes $(v, u)$. The cost of performing such an instruction is $W_i$ antcoins and it can be used at most $5 \cdot 10^5$ times.
- `2`: The queen orders that each ant which is currently in a vertex with outdegree $1$ must move to the only vertex adjacent to it. All ants move at once and when there are multiple ants that have to move from some vertex, they move together. The cost of performing such an instruction is $S$ antcoins and it can be used at most $700$ times.

After all instructions are performed, the number of distinct vertices which still contain ants must be at most $K$. Find a way to achieve this with as little cost as possible.

### Input
- The first line of the input contains four space-separated integers $N$, $M$, $K$ and $S$.
- $M$ lines follow. For each valid $i$, the $i$-th of these lines contains three space-seperated integers $u_i$, $v_i$ and $W_i$.

### Output
First, print a line containing a single integer $Q$ ― the number of instructions.

Then, print $Q$ lines. Each of these lines should describe one instruction in the format `1 i` or `2`.

### Example Input
```
6 6 1 1
1 2 1
3 2 2
4 3 3
5 4 4
6 5 5
6 1 6
```

### Example Output
```
6
2
2
2
1 1
1 5
2
```

### Explanation
The following picture describes the state of the graph after the first operation (the highlighted vertices contain ants).

<img src="https://codechef_shared.s3.amazonaws.com/download/Images/AUG20/ANTS/ANTS.png"></img>

In the fourth and fifth instructions, the edges $(1, 2)$ and $(6, 5)$ are flipped. At the end, all ants are gathered in vertex $1$.

### Test generation and constraints
- $N$ is either $10^3$ or $10^4$
- $M = 10^5$
- $S$ is $50$, $500$ or $5,000$
- $K$ is $1$ or $8$

There are twelve test files ― one for each combination of the parameters $N$, $M$, $S$ and $K$.

$M$ distinct undirected edges are chosen uniformly randomly and independently from the $N \cdot (N-1)/2$ possibilities, then a direction is uniformly random and independently chosen for each edge. The cost of each edge is chosen uniformly randomly and independently between $1$ and $50$ inclusive.

### Scoring
If any of your instructions are invalid or there are more than $K$ vertices containing ants after all instructions are performed, you will receive the Wrong Answer verdict. Otherwise, the score of a test file is the sum of costs of all instructions. The score of a submission is the sum of scores of all test files. Your goal is to minimise the score of your submission.

There are twelve test files. During the contest, the displayed score will account for exactly six test files, i.e. your score reflects your submission's performance on 50% of the test files. However, if your program gets a non-AC verdict on any test file, your submission's verdict will be non-AC. In other words, an AC verdict denotes that your program runs successfully on all the test files. After the end of the contest, your score will be changed to include the sum of your program's scores over the other 6 test files.

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>