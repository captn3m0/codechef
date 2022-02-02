---
{"category_name":"medium","problem_code":"CARPD","problem_name":"Cheapest Travel Plan","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"2\r\n    4 4\r\n    4 4\r\n    10 5\r\n    3 1 2 0\r\n    1 2 7\r\n    2 4 3\r\n    2 3 1\r\n    3 4 3\r\n    2 1\r\n    4 4\r\n    10 5\r\n    3 1\r\n    1 2 9","output":"75\r\n    -1","explanation":"In the first testcase, the following plan is optimal:\r\n- In city $1$, buy $4$ units of diesel and $4$ units of petrol with total cost $4 \\times 10 + 4 \\times 5 = 60$. Now you have $8$ units of fuel, so you can reach city $3$ ($1 \\rightarrow 2 \\rightarrow 3$). \r\n- In city $3$, buy $3$ units of diesel, which is enough to reach city $4$. The cost here is $3 \\times 5 = 15$.\r\n\r\nThe total cost is $60 + 15 = 75$.\r\n\r\nIn the second testcase, the maximum fuel you can get is $8$ units, but the only road from city $1$ to city $2$ has length $9$. So, there is no possible way.","isDeleted":false}}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"jtnydv25","problem_tester":"","date_added":"29-12-2020","tags":{"0":"jtnydv25","1":"ltime92","2":"medium","3":"shortest"},"problem_difficulty_level":"Medium","best_tag":"Shortest Path","editorial_url":"https://discuss.codechef.com/problems/CARPD","time":{"view_start_date":1104528600,"submit_start_date":1104528600,"visible_start_date":1104528600,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=CARPD","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Hindi](https://www.codechef.com/download/translated/LTIME92/hindi/CARPD.pdf), [Bengali](https://www.codechef.com/download/translated/LTIME92/bengali/CARPD.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/LTIME92/mandarin/CARPD.pdf), [Russian](https://www.codechef.com/download/translated/LTIME92/russian/CARPD.pdf), and [Vietnamese](https://www.codechef.com/download/translated/LTIME92/vietnamese/CARPD.pdf) as well.

You have a car that runs on both petrol and diesel. The prices of petrol and diesel per unit volume are $P_p$ and $P_d$ respectively. Using one unit volume of fuel, you can travel one unit distance. The petrol tank of your car has a capacity $C_p$ units. (It means that at any instant, your car can store no more than $C_p$ volume of petrol. The diesel tank of your car has a capacity $C_d$.

There are $N$ cities and $M$ uni-directional roads in your country. You know the endpoints and lengths of all the roads. The cities are of four types:
- Type 0 :No fuel is available in this city.
- Type 1 : Only petrol is available in this city. When you are in this city, you can refill your petrol tank to any volume $ \leq C_p$, paying $P_p$ per unit volume of added petrol.
- Type 2 : Only diesel  is available in this city. When you are in this city, you can refill your diesel tank to any volume $ \leq C_d$, paying $P_d$ per unit volume of added diesel.
- Type 3 : Both petrol and diesel are available in this city. When in this city, you can refill either petrol or diesel or both respecting the respective capacity constraints and paying $P_p$ per unit volume of added petrol and $P_d$ per unit of added diesel.


Currently, you are in city $1$ with no fuel in your car and want to travel to city $N$. Find the minimum possible cost of the fuel you will have to buy.

###Input:

- First line will contain $T$, number of testcases. Then the testcases follow. 
- The first line of each testcase contains two integers, $N$ and $M$.
- The second line contains two integers, $C_p$ and $C_d$.
- The third line contains two integers $P_p$ and $P_d$.
- The fourth line contains the space separated types of the $N$ cities.
- Each of the next $M$ lines contains the description of a road : $u, v, l$, meaning that there is uni-directional road from city $u$ to city $v$ of length $l$.

###Output:
For each testcase, if it is impossible to travel from city $1$ to city $N$, print $-1$ on a new line. Else, print the minimum possible cost on a new line.

###Constraints 
- $1 \leq T \leq 100$
- $2 \leq N \leq 300$.
- $ 1 \leq M \leq N (N - 1)$.
- The sum of $N$ over all testcases doesn't exceed $300$.
- There is no road from a city to itself, and for any ordered pair $(u, v)$ there is at max one road from $u$ to $v$.
- $1 \leq C_p, C_d \leq 300$.
- $ 1 \leq P_p, P_d \leq 2000$.
- $ 1 \leq u, v \leq N$ and $u \neq v$.
- $1 \leq l \leq 500$.

### Subtasks
**Subtask #1 (10 points):**  $1 \leq n, C_p, C_d \leq 30$.

**Subtask #2 (30 points):** $1 \leq n, C_p, C_d \leq 80$.

**Subtask #3 (20 points):** Type of each city is either 0 or 3.

**Subtask #4 (40 points):** original constraints.

### Sample Input
    2
    4 4
    4 4
    10 5
    3 1 2 0
    1 2 7
    2 4 3
    2 3 1
    3 4 3
    2 1
    4 4
    10 5
    3 1
    1 2 9

### Sample Output
    75
    -1

### Explanation
In the first testcase, the following plan is optimal:
- In city $1$, buy $4$ units of diesel and $4$ units of petrol with total cost $4 \times 10 + 4 \times 5 = 60$. Now you have $8$ units of fuel, so you can reach city $3$ ($1 \rightarrow 2 \rightarrow 3$). 
- In city $3$, buy $3$ units of diesel, which is enough to reach city $4$. The cost here is $3 \times 5 = 15$.

The total cost is $60 + 15 = 75$.

In the second testcase, the maximum fuel you can get is $8$ units, but the only road from city $1$ to city $2$ has length $9$. So, there is no possible way.

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>