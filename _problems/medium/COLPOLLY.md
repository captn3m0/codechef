---
{"category_name":"medium","problem_code":"COLPOLLY","problem_name":"What is this, a crossover episode","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"PYTH","5":"PYP3","6":"CS2","7":"ADA","8":"PYPY","9":"TEXT","10":"PAS fpc","11":"NODEJS","12":"RUBY","13":"PHP","14":"GO","15":"HASK","16":"TCL","17":"PERL","18":"SCALA","19":"LUA","20":"kotlin","21":"BASH","22":"JS","23":"LISP sbcl","24":"rust","25":"PAS gpc","26":"BF","27":"CLOJ","28":"R","29":"D","30":"CAML","31":"FORT","32":"ASM","33":"swift","34":"FS","35":"WSPC","36":"LISP clisp","37":"SQL","38":"SCM guile","39":"PERL6","40":"ERL","41":"CLPS","42":"ICK","43":"NICE","44":"PRLG","45":"ICON","46":"COB","47":"SCM chicken","48":"PIKE","49":"SCM qobi","50":"ST","51":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"evil999man","problem_tester":null,"date_added":"21-12-2019","tags":{"0":"evil999man"},"problem_difficulty_level":"Medium","best_tag":"","editorial_url":"","time":{"view_start_date":1577730600,"submit_start_date":1577730600,"visible_start_date":1577730600,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=COLPOLLY","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
You are given a simple polygon (that is, its edges don't intersect with each other, apart from touching at the vertices) with $n$ vertices. The vertices are numbered, in clockwise order, as $1, 2, \ldots, n$. Additionally, there are $m$ non-intersecting chords within the polygon. Note however that chords can touch each other at a vertex of the polygon. A chord is defined to be a line segment connecting two vertices of the polygon and which remains completely inside the polygon.

Considering it as a graph, there will be $n$ edges of the polygon, and $m$ extra chords, i.e. $n+m$ edges overall. Find a minimum coloring of the vertices, such that no two adjacent vertices have same color.

###Input:

- The first line will contain two space separated integers, $n$ and $m$, denoting the number of vertices and the number of chords respectively.
- The next $m$ lines contain $2$ space separated integers, $x$ and $y$, denoting a chord between vertices $x$ and $y$. 

It is guaranteed that there exists a simple polygon where all chords lie within the polygon and no $2$ chords intersect.

###Output:
- In the first line, print $k$, the number of colors you will be using to color the polygon's vertices.
- Then in a new line, print $n$ space separated integers, $c_1, c_2, \ldots, c_n$, where $c_i$ is the color of the $i^{th}$ vertex. You should ensure that $1 \leq c_i \leq k$.
- You should use the minimum possible number of colors. If there are multiple solutions, print any one.

###Constraints 
- $3 \leq n \leq 10000$
- $0 \leq m \leq n - 3$
- $1 \leq x, y \leq n$

###Sample Input:
	4 1
	1 3

###Sample Output:
	3
	1 2 3 2
	
###Explanation:
All adjacent node pairs are: [1, 2] [2, 3] [3, 4] [4, 1] [1, 3]. It can be seen that no $2$ adjacent nodes have same color, and can be proven that we cannot do it in $2$ colors.
<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>