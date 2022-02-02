---
{"category_name":"easy","problem_code":"CENS20E","problem_name":"Priya and Parity","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":1.5,"source_sizelimit":50000,"problem_author":"saurabhshadow","problem_tester":"","date_added":"17-07-2020","tags":{"0":"cens2020","1":"saurabhshadow","2":"saurabhshadow"},"problem_difficulty_level":"Easy","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/CENS20E","time":{"view_start_date":1597860000,"submit_start_date":1597860000,"visible_start_date":1597860000,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=CENS20E","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
There are $N$ cities number from $1$ to $N$ each city is having a weight of $w_{i}$ and they are connected through $M$ bidirectional roads between them. 
Let the parity of a city $c_{i} $ be even if the number of set bits in its binary representation of $w_{i}$ is even and odd otherwise.

You are given $Q$ queries, each query can be of two types:
- $1$ $K$ - print the size of **largest** connected group of cities in which parity of each city is **odd** after XOR with $K$.
- $2$ $K$ -  print the size of **largest** connected group of cities in which parity of each city is **even** after [XOR](https://en.wikipedia.org/wiki/Bitwise_operation#XOR) with $K$.

A group of cities is said to be **connected** if we can go from one city of the group to any other city of the group without passing through any city that is not in the group. A group with one city is considered as connected.

###Input:
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line input of each test case contains two space-separated integers $N$ and $M$. 
- The second line contains $N$ space-separated integers denoting $w_{i}$.
- The next $M$ lines contain two space-separated integers $U_{i}$ and $V_{i}$, each denoting a bidirectional edge between the cities $U_{i}$ and $V_{i}$.
- The next $Q$ lines describe each query in the format given above.

###Output:
- For each query of type $1$ -  print the size of **largest** connected group of cities in which parity of each city is **odd** after XOR with $K$.
- For each query of type $2$-  print the size of **largest** connected group of cities in which parity of each city is **even** after XOR with $K$.

###Constraints 
- $1 \leq T \leq 5$
- $1 \leq N\leq 2 \times 10^5$
- $1 \leq M \leq min(2 \times 10^5, \frac{N\times(N-1)}{2}$)
- $1 \leq w_{i}, K \leq 10^9$
- $1 \leq U_{i},V_{i} \leq N$  for each valid i
- $1 \leq Q \leq 10^5$
- the graph contains no duplicate edges or self-loops

###Sample Input:
```
1
6 6
6 4 10 7 5 5
3 4
5 1
5 6
3 6
1 4
5 3
4
1 6
1 8
1 7
2 6
```

###Sample Output:
```
1
4
4
4
```
###Explanation:
![](https://codechef_shared.s3.amazonaws.com/download/HYC/External_contest_images/CENS2020/CENS20E/CENS20E.png) 


- **Query 1** - The size of the largest connected group of cities in which parity of each city is **odd** after XOR with $6$ is equal to $1$.  Since the parity of the city, $2$ and $4$ is odd after XOR with $6$, but $2$ is not connected with $4$. Therefore the answer is equal to $1$.
- **Query 2** - The size of the largest connected group of cities in which parity of each city is **odd** after XOR with $8$ is equal to $4$ because, after XOR with $8$, cities $ 1, 5, 3, 6$ have odd parity. Therefore the answer is equal to $4$.

Similarly, you can find the answer for other queries.

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>