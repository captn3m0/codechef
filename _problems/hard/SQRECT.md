---
{"category_name":"hard","problem_code":"SQRECT","problem_name":"Square in rectangles","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.6","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"PYP3","47":"CLOJ","48":"COB","49":"FS"},"max_timelimit":10,"source_sizelimit":50000,"problem_author":"balajiganapath","problem_tester":null,"date_added":"25-12-2018","tags":{"0":"balajiganapath"},"time":{"view_start_date":1546074900,"submit_start_date":1546074900,"visible_start_date":1546074900,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span>Squarectiland is a 2 dimensional plane which can be assumed to infinitely extend in all directions. There is a universal Cartesian coordinate system in Squarectiland, and thus each point is uniquely described by its coordinates $(x, y)$.

The king of Squarectiland wants to build a new palace. The palace has to be a square with sides aligned with the coordinate axes. The palace can be arbitrarily large, but the king also wants it to be a very secure place.

There are $n$ guard stations in Squarectiland. The $i$-th station is located at the point $(x_i, y_i)$. The king can set up several guard squads to patrol around the palace. The guards are simple folk, and can only follow simple orders. Each guard squad will have exactly two distinct guard stations assigned to it. Then, the patrol route of this particular guard squad will be the axes-aligned rectangle with the smallest area which contains both of these stations on its boundary (note that this rectangle can have zero area if the stations share an $x$- or a $y$-coordinate). To avoid quarrel and confusion, each station can be assigned to at most one guard squad.

The king wishes to set up $k$ guard squads as described above, and in such a way that the patrol of each of the $k$ guard squads encircles the palace (that is, every point inside or on the boundary of the palace has to be either visited or inside the rectangular patrol of each of the guard squads). Help him determine the largest possible size of the palace that can be secured this way.

###Input:
- The first line of the input contains a single positive integer $T$, the number of testcases. Descriptions of $T$ test cases follow. 
- Each test case description starts with a line containing two integers $n$ and $k$, denoting the number of guard stations and the desired number of guard squads, respectively.
- The following $n$ lines describe locations of the guard stations. The $i$-th of these lines contains two integers $x_i, y_i$, representing the coordinates of the $i$-th station. 


###Output:
- For each testcase, output in a new line, the largest side length of a palace that can be encircled by $k$ patrol routes. 
- If there is no way to build a palace with positive area, the answer should be $0$.

###Constraints 
- $2 \leq n \leq 5 \cdot 10^4$
- $1 \leq k \leq n / 2$
- $-10^6 \leq x_i, y_i \leq 10^6$
- The sum of all $n$ across all test cases in a single input does not exceed $5 \cdot 10^4$
- No two stations occupy the same point.

###Sample Input:
```
3
4 1
0 1
3 0
4 3
1 4
5 2
4 0
2 4
-4 1
-1 2
-3 5
2 1
0 0
10 0
```

###Sample Output:
```
2
3
0
```
	
###EXPLANATION:
**Testcase 1**:
The four guard stations are represented in the figure below by points A, B, C, and D. The rectangle AECF is the patrol associated with the squad which has the stations A and C assigned to it. And the palace can be built on the square GHIJ, with a side length of 2. You can check that this is the maximum possible, and hence then answer is 2.

![Alt Text](https://codechef_shared.s3.amazonaws.com/download/ACMINO18/SQRECT/1.png =350x350)


**Testcase 2**:
The five guard stations are represented in the figure below by points A, B, C, D, and E. The rectangle AIEH is the patrol associated with the squad which has the stations A and E assigned to it. The rectangle BGCF is the patrol associated with the squad which has the stations B and C assigned to it. And the palace can be built on the square JKLM, with a side length of 3. You can check that this is the maximum possible, and hence then answer is 3.

![Alt Text](https://codechef_shared.s3.amazonaws.com/download/ACMINO18/SQRECT/2.png =475x350)

**Testcase 3**: The only possible route is a straight segment, hence there is no way to place a square of positive area inside it.