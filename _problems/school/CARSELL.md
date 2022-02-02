---
{"category_name":"school","problem_code":"CARSELL","problem_name":"Sell All the Cars","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"2\r\n3\r\n6 6 6\r\n3\r\n0 1 0","output":"15\r\n1","explanation":"**Example case 1:**\r\n- During the first year, Chef\u0027s profit so far is $0$ and the prices of the cars are $[6,6,6]$. Chef sells one of these cars.\r\n- During the second year, Chef\u0027s profit so far is $6$ and the prices of the remaining cars are $[5,5]$. Again, Chef sells one of these cars.\r\n- During the third year, Chef\u0027s profit so far is $11$ and there is one car with price $4$. Chef sells this car.\r\n- In the fourth year, Chef has sold all of his cars and his profit is $15$. This is the maximum profit he can make. \r\n\r\n**Example case 2:**\r\n- During the first year, Chef\u0027s profit so far is $0$ and the prices of the cars are $[0,1,0]$. Chef sells the second car.\r\n- During the second year, Chef\u0027s profit so far is $1$ and the prices of the remaining cars are $[0,0]$. Chef sells one of these cars.\r\n- During the third year, Chef\u0027s profit so far is $1$ and there is one car with price $0$. Chef sells this car.\r\n- During the fourth year, Chef has sold all his cars and his profit is $1$.","isDeleted":false}}},"video_editorial_url":"https://youtu.be/IdpYkUasVaw","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"dragonado","problem_tester":"","date_added":"26-03-2020","tags":{"0":"april20","1":"dragonado","2":"greedy","3":"simple","4":"taran_1407"},"problem_difficulty_level":"Simple","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/CARSELL","time":{"view_start_date":1586779202,"submit_start_date":1586779202,"visible_start_date":1586779202,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=CARSELL","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Hindi](https://www.codechef.com/download/translated/APRIL20/hindi/CARSELL.pdf), [Bengali](https://www.codechef.com/download/translated/APRIL20/bengali/CARSELL.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/APRIL20/mandarin/CARSELL.pdf), [Russian](https://www.codechef.com/download/translated/APRIL20/russian/CARSELL.pdf), and [Vietnamese](https://www.codechef.com/download/translated/APRIL20/vietnamese/CARSELL.pdf) as well.

Chef owns $N$ cars (numbered $1$ through $N$). He wishes to sell all of them over $N$ years by selling exactly one car per year. For each valid $i$, the initial price of the $i$-th car is $P_i$. Due to depreciation, the price of each car decreases by $1$ unit per year until it is sold.

Note that the price of a car cannot drop below $0$ no matter how many years have passed, i.e. when the price of a car reaches $0$ in some year, it remains $0$ in all subsequent years.

Find the maximum profit Chef can make if he sells his cars in an optimal way. Since this number may be large, compute it modulo $1,000,000,007$ ($10^9+7$).

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains a single integer $N$.
- The second line contains $N$ space-separated integers $P_1, P_2, \ldots, P_N$.

### Output
For each test case, print a single line containing one integer ― the maximum profit Chef can make, modulo $1,000,000,007$.

### Constraints
- $1 \le T \le 25$
- $1 \le N \le 10^5$
- $0 \le P_i \le 10^9$ for each valid $i$

### Subtasks
**Subtask #1 (30 points):** $N \le 2 \cdot 10^3$

**Subtask #2 (70 points):** original constraints

### Example Input
```
2
3
6 6 6
3
0 1 0
```

### Example Output
```
15
1
```

### Explanation
**Example case 1:**
- During the first year, Chef's profit so far is $0$ and the prices of the cars are $[6,6,6]$. Chef sells one of these cars.
- During the second year, Chef's profit so far is $6$ and the prices of the remaining cars are $[5,5]$. Again, Chef sells one of these cars.
- During the third year, Chef's profit so far is $11$ and there is one car with price $4$. Chef sells this car.
- In the fourth year, Chef has sold all of his cars and his profit is $15$. This is the maximum profit he can make. 

**Example case 2:**
- During the first year, Chef's profit so far is $0$ and the prices of the cars are $[0,1,0]$. Chef sells the second car.
- During the second year, Chef's profit so far is $1$ and the prices of the remaining cars are $[0,0]$. Chef sells one of these cars.
- During the third year, Chef's profit so far is $1$ and there is one car with price $0$. Chef sells this car.
- During the fourth year, Chef has sold all his cars and his profit is $1$.

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>