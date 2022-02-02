---
{"category_name":"hard","problem_code":"SHRINES","problem_name":"Brahma and Shiva","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{}},"video_editorial_url":"https://youtu.be/V8WY4s1NWl4","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"alei","problem_tester":"","date_added":"26-03-2021","tags":{"0":"alei","1":"april21","2":"geometry","3":"hard","4":"interactive","5":"planar"},"problem_difficulty_level":"Hard","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/SHRINES","time":{"view_start_date":1618219800,"submit_start_date":1618219800,"visible_start_date":1618219800,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=SHRINES","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Bengali](https://www.codechef.com/download/translated/APRIL21/bengali/SHRINES.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/APRIL21/mandarin/SHRINES.pdf), [Russian](https://www.codechef.com/download/translated/APRIL21/russian/SHRINES.pdf), and [Vietnamese](https://www.codechef.com/download/translated/APRIL21/vietnamese/SHRINES.pdf) as well.

**This in an interactive problem**

Brahma created a bidimensional world, he started from a giant circle and placed $2 \cdot N$ points (numbered $1$ through $2 \cdot N$) in clockwise order on the circumference. Then Brahma created many regions by consecutively taking two of the points and slicing the circle with a line segment connecting them. The slices are such that the following conditions are satisfied:
- There is exactly one slice going through each point on the perimeter
- No three segments intersect at one point
- There are no three segments that pairwise intersect each other

After the slices, the points resulting from the intersection of two segments were numbered arbitrarily with consecutive integers from $2\cdot N + 1$ through $V$. An unordered pair $(p,q)$ is *good*, if there is a slice that passes through points $p$ and $q$, and none of the other $V-2$ points lies in the segment $pq$. There are  in total $M$ distinct good pairs, for each valid $i$, the $i-$th good pair is $(p_i,q_i)$.

Brahma stablished a city in each of the connected regions with finite area (numbered $1$ through $C$). For each valid $i$, let $R_i$ denote the sequence of indices of the points on the perimeter of the $i$-th region in increasing order. Brahma numbered the cities in lexicographically increasing order ($R_i \lt R_{i+1}$).

Then, each of the $K$ gods chose one of the regions to build their home, no city was chosen as the home of more than one god. Let $S$ be the set of cities chosen by the gods.

It is possible to travel from one city to another, if their respective regions share an edge. Let $D(u, v)$ be the length of the shortest path between cities $u$ and $v$ i.e the minimum number of edges we have to cross to go from $u$ to $v$. The *beauty* of city $u$ is given by $\frac{1}{\sum_{v \in S} D(u,v)}$. The cities that have the maximum beauty among all the cities are called *holy cities*.

Some eons later, Shiva decided that is time to destroy the world, the only way to calm his fury is to build a shrine in each holy city. After so much time we don't remember which cities are holy neither which cities are home of a god! However we have a plan, we'll organize many festivities to gather information. In each festivity the following happens: 

* We choose two cities $u$, $v$ ($u \neq v$) and all the gods are invited to go to any of those cities.
* Each god goes to the city nearest to their home. if both $u$ and $v$ are at the same distance, then that god does not assist to the festivity.
* We count the number of gods that assisted to each of the two cities.

Your task is to save the world by organizing at most $C$ festivities to find the holy cities.

### Interaction
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of interaction for $T$ test cases follows.
- For each test case, you should start by reading a line containing four space-separated integers $N$, $V$, $M$, $K$.
- The next $M$ lines contains two space-separated integers $p_i$ and $q_i$.
- Then, you may start organizing the festivities.
    - To create a festivity, you should print a line containing three space-separated integers $1$, $u$, $v$.
    - Then, you should read a line containing two space-seprated integers $x$, $y$ ― the number of gods that attended city $u$ and $v$ respectively.
    - If the festivity is invalid or if you organized too many festivities, you will receive the wrong answer verdict.
- When you have determined which are the holy cities, you should print a line containing $L + 2 $ space-separated integers $2$, $L$, $H_1$,..., $H_L$, where for each valid $i$, $H_i$ is the index of the $i$-th holy city in increasing order ($H_i \lt H_{i+1}$).

Don't forget to flush the output after printing each line!

### Constraints
- $4 \leq C \leq 300$
- The sum of $C$ over all test cases doesn't exceed $10^4$
- $2 \leq K \leq C$
- Is guaranteed that there is only one way of reconstructing the cities from the $M$ good pairs.
### Subtasks
**Subtask #1 (20 points):** $K=2$

**Subtask #2 (80 points):** Original constraints

### Example
```
Grader          You
1
4 10 8 2
1 10
2 10
3 9
4 9
5 9
6 10
7 8
9 10
                1 3 7
1 1                                                               
                1 1 5
1 1
                2 6 1 2 3 4 5 6
```

### Explanation
The following figure describes the cities created by Brahma
<img src="https://s3.amazonaws.com/codechef_shared/download/Images/APRIL21/SHRINES/SHRINES.png"></img>

The cities are numbered lexicographically. $R_2 = (1,6,7,8,10)$, $R_6=(5,6,9,10)$, $R_7=(7,8)$

There are two gods at cities $2$ and $4$. 

In the second festivity, the god at city $2$ goes to city $1$, and the god at city $4$ goes to $5$. 

All cities except $7$ are holy.

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>