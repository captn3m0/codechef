---
{"category_name":"hard","problem_code":"REFORMS","problem_name":"Reforms, Reforms Never Change","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.6","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"PYP3","47":"CLOJ","48":"COB","49":"FS"},"max_timelimit":3,"source_sizelimit":50000,"problem_author":"balajiganapath","problem_tester":null,"date_added":"25-12-2018","tags":{"0":"balajiganapath"},"time":{"view_start_date":1546074900,"submit_start_date":1546074900,"visible_start_date":1546074900,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span>The king of Berland wants to revise his road system. Again.

This time the kingdom of Berland consists of $n$ cities and $m$ one-way roads. The cities are numbered from 1 to $n$. Each road allows to travel from some city to some other city. It is not possible to travel the road in opposite direction.

The king plans to stimulate a migration in his country, so he plans to change the direction of some roads in such a way that there exists a path from city $1$ to city $n$.  Due to complicated legislation he is only allowed to perform operations of two types.

* Pick some city $v$. Consider all cities $u$ such that there exists a road between $v$ and $u$ (direction doesn't matter) and change its direction to lead from city $v$ to city $u$. In other words, all roads incident to city $v$ become outgoing.
* Pick some city $v$. Consider all cities $u$ such that there exists a road between $v$ and $u$ (direction doesn't matter) and change its direction to lead from city $u$ to city $v$. In other words, all roads incident to city $v$ become incoming.

The king is a very busy man so he wants to minimize the total number of actions he has to perform, so that at the end, there will be a directed path from $1$ to $n$. Help the king by computing this value for him, or determine that there is no solution.

###Input:
- The first line of the input contains a single integer $t$ - the number of test cases in this input. Then follow $t$ descriptions of individual test cases.
- The first line of each test case description starts with two integers $n$ and $m$, denoting the number of cities and the number of roads in the kingdom of Berland. 
- Then follow $m$ lines, the $i$-th line containing integers $u_i$ and $v_i$ , meaning that there is a road between cities $u_i$ and $v_i$ that is currently directed from $u_i$ to $v_i$. 

###Output:
- For each testcase, output a single line which should contain a single integer equal to the minimum number of actions the king needs to take in order to create a directed path from city $1$ to city $n$. 
- If there is no solution for some of test cases, the answer for such test cases should be $-1$.

###Constraints 
- $1 \leq t \leq 1000$
- $2 \leq n \leq 500\,000$ 
- $0 \leq m \leq 1\,000\,000$
- $1 \leq u_i, v_i \leq n$ 
- $u_i \ne v_i$
- It is guaranteed that there is no more than one road (whatever direction) between each pair of cities.
- It is guaranteed that *the total number of cities* in all test cases doesn't exceed $500\,000$ and *the total number of roads* in all test cases doesn't exceed $1\,000\,000$.

###Sample Input:
	2
	2 0
	5 6
	2 1
	1 3
	2 3
	3 4
	2 5
	5 4

###Sample Output:
	-1
	1
	
###EXPLANATION:
The sample input consists of two test cases.

In the first test case, there are no roads at all, so the answer is $-1$.

In the second test case, the king can pick the $5$-th city and change the direction of all roads incident to this city (these are roads $2-5$ and $4-5$) to point to city $5$. Thus, the answer is $1$.