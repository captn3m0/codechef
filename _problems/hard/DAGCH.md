---
category_name: hard
problem_code: DAGCH
problem_name: 'Graph Challenge'
languages_supported:
    - ADA
    - ASM
    - BASH
    - BF
    - C
    - 'C99 strict'
    - CAML
    - CLOJ
    - CLPS
    - 'CPP 4.3.2'
    - 'CPP 4.9.2'
    - CPP14
    - CS2
    - D
    - ERL
    - FORT
    - FS
    - GO
    - HASK
    - ICK
    - ICON
    - JAVA
    - JS
    - 'LISP clisp'
    - 'LISP sbcl'
    - LUA
    - NEM
    - NICE
    - NODEJS
    - 'PAS fpc'
    - 'PAS gpc'
    - PERL
    - PERL6
    - PHP
    - PIKE
    - PRLG
    - PYTH
    - 'PYTH 3.4'
    - RUBY
    - SCALA
    - 'SCM guile'
    - 'SCM qobi'
    - ST
    - TCL
    - TEXT
    - WSPC
max_timelimit: '2'
source_sizelimit: '50000'
problem_author: shiplu
problem_tester: laycurse
date_added: 12-12-2013
tags:
    - feb14
    - hard
    - shiplu
editorial_url: 'http://discuss.codechef.com/problems/DAGCH'
time:
    view_start_date: 1392629400
    submit_start_date: 1392629400
    visible_start_date: 1392629400
    end_date: 1735669800
    current: 1493556676
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese ](http://www.codechef.com/download/translated/FEB14/mandarin/DAGCH.pdf) and [Russian](http://www.codechef.com/download/translated/FEB14/russian/DAGCH.pdf).

Chef Hawlader and Chef Heickal are two good friends. Apart from cooking they also love algorithms. Chef Hawlader loves graph theory and Chef Heickal loves number theory.

Once again, Chef Hawlader is giving lecture to Chef Heickal about graph theory. "Hey Heickal, you should concentrate more on graph theory research. What remains in number theory? Graph is everything in the world, you can convert every problem to graph and solve them easily. Even your number theory problems can be converted and solved with graph theory, you know?" says Chef Hawlader. Though Chef Heickal does not hate graph, but according to his theory the life should a mixture of dynamic programming, number theory, data structure, ad hoc, graph theory, and so on. To become a good Chef you have to know all of them not just graph theory.

- "So are you master of graph? Do you know about DFS?" asks Chef Heickal.
- "Yes, of course. DFS, in full form Depth First Search, is a traversing or searching algorithm on graph. It's a basic algorithm", Chef Hawlader replied with angriness in his face.
- "Then, for a given graph, can you number each vertex using DFS in pre-order?" asks Chef Heickal again.
- "Too easy! It will be done by the following pseudo code:"

<pre>
<b>
	int C = 1;
	void DFS(int u)
	{
		new_number[u] = C;
		C++;

		// initially all value of visited array is set to false
		visited[u] = true;

		// here v can be chosen in an arbitrary order
		for each v such that there is a edge from u to v
			if(visited[v] == false) 
				DFS(v);
	}
</b>
</pre>
- "Okey, I can give you a hard problem", says Chef Heickal with evil smile.
- "What? Come on", replies Chef Hawlader with grinning face.
- "I'll give you a directed graph with **N** vertices and **M** edges. Here each vertex of the graph is numbered by DFS in pre-order. Of course, every vertex other than vertex **1** are reachable from vertex **1**."
- "Okey, so what's problem?"
- "Wait, I give some definitions. A vertex **x** is a *supreme* vertex of **y**, if there is a directed path **x = v0, v1, ..., vk = y**, where **x < y < vi** for all **0 < i < k**, that is a path from **x** to **y** with zero or more intermediate vertex **vi** and every intermediate vertex should be greater than **x** and **y** and **x** should be less than **y**. A vertex **v** is a *superior* vertex of **w**, if **v** is the minimum numbered vertex among all the *supreme* vertices of **w**. You will be given **Q** queries on the graph. On each query you will be given a vertex **v**, you have to find out how many vertices are there in the graph, which have vertex **v** as superior vertex."
- "Oh!! Duh!!"

Chef Hawlader could not solve the problem, he is asking you to solve it for him.

### Input

The first line of the input contains an integer **T**, denoting the number of test cases. Then **T** test cases follow.

The first line of each test contains three space-separated integers **N**, **M**, and **Q**. The **i**th line of the next **M** lines contains two space-separated integers **Ui** and **Vi** denoting the directed edge from vertex **Ui** to vertex **Vi**. The next line will contain **Q** space separated integers **P1**, **P2**, ..., **PQ**, denoting the queries defined above.

### Output

For each test case, print a single line containing **Q** space-separated integers, denoting the answer of the **Q** queries according to the order of the input. If there is no superior vertex for a query, print 0. See the sample input and output for detailed format.

### Constraints

- **1 ≤ T ≤ 10**
- **2 ≤ N ≤ 100000 (105)**
- **N − 1 ≤ M ≤ 200000 (2 × 105)**
- **1 ≤ Q ≤ 100000 (105)**
- **1 ≤ Ui, Vi ≤ N**, **Ui ≠ Vi**
- If **i ≠ j**, then **(Ui, Vi) ≠ (Uj, Vj)**
- **1 ≤ Pi ≤ N**
- In the given graph, the vertices **2**, **3**, ..., **N** are reachable from vertex **1**
- The vertices of the graph is numbered by DFS, denoted by the pseudo code in the statement

### Example

<pre><b>Input:</b>
2
3 3 3
1 2
1 3
3 2
1 2 3
8 9 8
1 2
1 7
2 3
2 5
3 4
5 6
7 8
6 4
8 4
1 2 3 4 5 6 7 8

<b>Output:</b>
2 0 0
3 2 0 0 1 0 1 0
</pre>
### Explanation

**Example case 1.** Vertex **3** has only vertex **1** as *supreme* vertex as well as *superior* vertex because there is a direct edge from **1** to **3** and vertex **2** has a *supreme* vertex **1** (**1** → **3** → **2**). As vertex **2** has only one *supreme* vertex, it is the *superior* vertex also.

**Example case 2.** Vertex **4** has three *supreme* vertices **1** (**1** → **7** → **8** → **4**), **2** (**2** → **5** → **6** → **4**) and **3** (**3** → **4**). So vertex **1** is the *superior* vertex of **4**.
