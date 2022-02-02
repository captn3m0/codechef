---
{"category_name":"easy","problem_code":"SIRUSERI","problem_name":"Siruseri Gerrymandering","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.6","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"PYP3","47":"CLOJ","48":"COB","49":"FS"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"admin2","problem_tester":null,"date_added":"17-12-2018","tags":{"0":"admin2"},"time":{"view_start_date":1545157800,"submit_start_date":1545157800,"visible_start_date":1545157800,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span>The country of Siruseri has $A*B$ districts. You want to create $A$ states from these districts, such that each state has exactly $B$ districts, and each district is part of exactly one state. You don't care about the geographical location of the districts. You can pick any $B$ districts and make it into a state.

There are only two parties contesting in the coming elections: $P_1$ and $P_2$. You know the number of votes that each party receives in each district. In the i-th district, $P_1$ gets $c_i$ votes and $P_2$ gets $d_i$ votes. You are guaranteed that all these $2*A*B$ integers (the number of votes received by each party in the districts) are distinct. Also, both $A$ and $B$ are odd. 

Suppose you have chosen which districts belong to which states, then, to find out who wins any particular state, they follow a weird rule: Suppose the number of votes that $P_1$ gets in the $B$ districts of a particular state are $x_1, x_2, \ldots, x_B$, and the number of votes that $P_2$ gets in the $B$ districts of this state are $y_1, y_2, \ldots, y_B$. Then among all these $2*B$ numbers, the largest number is chosen (note that we are guaranteed of an unique largest number). If that number is some $x_i$, then $P_1$ wins this state. If the largest number is some $y_j$, then $P_2$ wins this state.

You secretly support the party $P_1$, and hence you want to assign the districts to states, in such a way, that the number of states won by $P_1$ is maximized. Find this maximum number of states that $P_1$ can win.

Note that $c_i$ and $d_i$ will always remain associated with the i-th district. If the i-th district gets assigned to a particular state, then both $c_i$ and $d_i$ will be considered when deciding who won that state.

###Input:
- The first line of the input contains a single integer, $T$, the number of testcases. The description of each testcase follows.
- The first line of each testcase contains two integers, $A$ and $B$.
- The second line of each testcase contains $A*B$ integers: $c_1, c_2, \ldots, c_{A*B}$, the number of votes won by $P_1$ in the districts.
- The third line of each testcase contains $A*B$ integers: $d_1, d_2, \ldots, d_{A*B}$, the number of votes won by $P_2$ in the districts.

###Output:
For each testcase output a single line which contains the maximum number of states that $P_1$ can win.

###Constraints:
- $1 \leq T \leq 5$
- $1 \leq A, B$
- $A*B \leq 10^5$
- $A$, $B$ are odd
- $1 \leq c_i, d_i \leq 10^9$
- All the $c_i$ and $d_i$ will be distinct.

###Sample Input:
```
3
1 3
4 2 9
5 6 7
1 3
4 2 9
5 10 7
3 3
7 14 11 4 15 5 20 1 17
2 13 16 9 19 6 12 8 10
```

###Sample Output:
```
1
0
3
```

###Explanation:
**Testcase 1**: Since you have to form only 1 state, there is no choice, but to put all the 3 districts in that same state. Now to figure out who wins that single state, we take the maximum among {4, 2, 9, 5, 6, 7}. The maximum is 9, and that belongs to $P_1$. Hence $P_1$ wins this state. And because they have won 1 state, the answer is 1.

**Testcase 2**: Similarly, there is no choice here. To figure out who wins that single state, we take the maximum among {4, 2, 9, 5, 10, 7}. The maximum is 10, and that belongs to $P_2$. Hence $P_2$ wins this state. And because $P_1$ have won no states, the answer is 0.

**Testcase 3**: We need to make three states with three districts each. Suppose we that the 3rd, 5th and 7th districts and form a state, the votes in them would be {11, 16, 15, 19, 20, 12}. The max among these is 20, and that belongs to $P_1$. Hence $P_1$ would win this state. 

Similarly, suppose we make the second state with the 2nd, 4th and 8th districts, the votes in them would be {14, 13, 4, 9, 1, 8}. The max among these is 14, and that belongs to $P_1$. Hence $P_1$ would win this state. 

The remaining three districts: 1st, 6th and 9th districts form the third state. The votes in them would be {7, 2, 5, 6, 17, 10}. The max among these is 17, and that belongs to $P_1$. Hence $P_1$ would win this state. 

In this situation, $P_1$ wins three states. You obviously cannot do any better. Hence the answer is 3.