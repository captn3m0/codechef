---
category_name: medium
problem_code: GRTRIP
problem_name: 'Greedy Trip'
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
max_timelimit: '1'
source_sizelimit: '50000'
problem_author: Rubanenko
problem_tester: vamsi_kavala
date_added: 16-06-2013
tags:
    - Rubanenko
    - dfs
    - graphs
    - ltime01
    - medium
editorial_url: 'http://discuss.codechef.com/problems/GRTRIP'
time:
    view_start_date: 1372581592
    submit_start_date: 1372581592
    visible_start_date: 1372581299
    end_date: 1735669800
    current: 1493557679
layout: problem
---
All submissions for this problem are available.Chef feels pretty greedy today. As you know Chef lives in ChefLand. It consists of **N** cities, connected by **M** one-directional roads. There are plenty of festivals in ChefLand and Chef does not want to miss any of them. So he has invented an efficient (as he thinks) algorithm of finding the shortest paths between cities. To get from city *S* to city *T* then he uses following method:

- The trip starts at city *S*

/>

- If Chef reaches city *T* then the algorithm stops

/>

- Initially only city S is visited and others are not

/>

- Chef chooses the shortest road from the current city that leads him to any unvisited city; if there are multiple shortest roads connected to unvisited cities then Chef can choose any of them; if all neighbour cities are visited then the algorithm stops

/>

- Chef goes along chosen road and algorithm returns to the previous step

/>


If in the end of the algorithm Chef is in the City T then he assumes this path to be the shortest, otherwise Chef believes that it is impossible to get from city *S* to city *T* by current system of roads.
You want to check his greedy algorithm. To do this you need to find number of such different pairs of cities (U,V) that this algorithm can probably find the shortest path from city U to city V. Note that if it is impossible to reach city V from U and Chef's algorithm can conclude the same that this pair of cities is also counted to the answer. Have a look at the example for better understanding.

### Input:

The first line contains the number of cities **N**, the number of roads. Then **M** lines follow with description of roads. Each road is described by three integers **u**, **v** and **w**, it means that there is a road from city **u** to city **v** of length **w**.

/>/>

### Output:

Output should contain a single integer on the first line - answer for the problem.

/>/>

### Constraints:

<pre>
1 ≤ <b>N</b> ≤ 2000
1 ≤ <b>M</b> ≤ 10000
1 ≤ <b>u,v</b> ≤ <b>N</b>
1 ≤ <b>w</b> ≤ 10000

</pre>
### Example:

**Input #1:**

<pre>
2 0

</pre>
**Output #1:**

<pre>
4

</pre>
**Input#2:**

<pre>
3 3
1 2 1
1 3 2
2 3 2

</pre>
**Output#2:**

<pre>
8

</pre>
**Explanation:**

For input#1 every possible pair is valid. for input#2 pair(1,3) is not valid, since Chef's algorithm will always go this way 1->2->3, while 1->3 is right way to get from 1 to 3. 

/>/>/>

### Scoring:

You will be awarded **40** points for solving the problem correctly for 1 ≤ **N, M**  ≤ 300.

The remaining **60** points will be awarded for solving the problem correctly for **N, M**  > 300./>
