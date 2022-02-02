---
{"category_name":"school","problem_code":"COLGLF4","problem_name":"College Life 4","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"3\r\n5 4 4 2 2 2\r\n4 5 5 1 2 3\r\n4 5 5 3 2 1","output":"-1\r\n7\r\n4","explanation":"**Example case 1:** The maximum number of items that can be produced using $4$ eggs and $4$ chocolates is $4$, so the answer is $-1$.\r\n\r\n**Example case 2:** In the optimal solution, the friends should order $2$ omelettes, $1$ chocolate milkshake and $1$ chocolate cake, with cost $1 \\cdot 2 + 2 \\cdot 1 + 3 \\cdot 1 = 7$.\r\n\r\n**Example case 3:** In the optimal solution, the friends should order $4$ chocolate cakes, with cost $1 \\cdot 4 = 4$.","isDeleted":false}}},"video_editorial_url":"https://youtu.be/KLJI12gE0Ow","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"daanish_adm","problem_tester":"","date_added":"20-01-2021","tags":{"0":"daanish_adm","1":"easy","2":"march21"},"problem_difficulty_level":"Easy","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/COLGLF4","time":{"view_start_date":1104528600,"submit_start_date":1104528600,"visible_start_date":1104528600,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=COLGLF4","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Bengali](https://www.codechef.com/download/translated/MARCH21/bengali/COLGLF4.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/MARCH21/mandarin/COLGLF4.pdf), [Russian](https://www.codechef.com/download/translated/MARCH21/russian/COLGLF4.pdf), and [Vietnamese](https://www.codechef.com/download/translated/MARCH21/vietnamese/COLGLF4.pdf) as well.

Chef and $N-1$ more of his friends go to the night canteen. The canteen serves only three items (well, they serve more, but only these three are edible!), which are omelette, chocolate milkshake, and chocolate cake. Their prices are $A$, $B$ and $C$ respectively.

However, the canteen is about to run out of some ingredients. In particular, they only have $E$ eggs and $H$ chocolate bars left. They need:
- $2$ eggs to make an omelette
- $3$ chocolate bars for a chocolate milkshake
- $1$ egg and $1$ chocolate bar for a chocolate cake

Each of the $N$ friends wants to order one item. They can only place an order if the canteen has enough ingredients to prepare all the ordered items. Find the smallest possible total price they have to pay or determine that it is impossible to prepare $N$ items.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first and only line of each test case contains six space-separated integers $N$, $E$, $H$, $A$, $B$ and $C$.

### Output
For each test case, print a single line containing one integer ― the minimum cost of $N$ items, or $-1$ if it is impossible to prepare $N$ items.

### Constraints
- $1 \leq T \leq 2 \cdot 10^5$
- $1 \leq N \leq 10^6$
- $0 \leq E, H \leq 10^6$
- $1 \leq A, B, C \leq 10^6$
- the sum of $N$ over all test cases does not exceed $10^6$

### Subtasks
**Subtask #1 (30 points):** $1 \leq N \leq 100$

**Subtask #2 (70 points):** original constraints

### Example Input
```
3
5 4 4 2 2 2
4 5 5 1 2 3
4 5 5 3 2 1
```

### Example Output
```
-1
7
4
```

### Explanation
**Example case 1:** The maximum number of items that can be produced using $4$ eggs and $4$ chocolates is $4$, so the answer is $-1$.

**Example case 2:** In the optimal solution, the friends should order $2$ omelettes, $1$ chocolate milkshake and $1$ chocolate cake, with cost $1 \cdot 2 + 2 \cdot 1 + 3 \cdot 1 = 7$.

**Example case 3:** In the optimal solution, the friends should order $4$ chocolate cakes, with cost $1 \cdot 4 = 4$.

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>