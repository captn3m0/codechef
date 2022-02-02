---
{"category_name":"easy","problem_code":"CHCBOX","problem_name":"Box of Chocolates","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"2\r\n6\r\n1 1 2 1 1 1\r\n6\r\n1 1 2 1 1 2","output":"3\r\n0","explanation":"**Example case 1:** The three valid right shifts and the contents of the box for these shifts are:\r\n- shift by $k = 1$: $(1, 1, 1, 2, 1, 1)$\r\n- shift by $k = 2$: $(1, 1, 1, 1, 2, 1)$\r\n- shift by $k = 3$: $(1, 1, 1, 1, 1, 2)$","isDeleted":false}}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"imanik","problem_tester":null,"date_added":"13-03-2020","tags":{"0":"ad","1":"cook116","2":"imanik","3":"simple","4":"tmwilliamlin"},"problem_difficulty_level":"Simple","best_tag":"Ad Hoc","editorial_url":"https://discuss.codechef.com/problems/CHCBOX","time":{"view_start_date":1584901802,"submit_start_date":1584901802,"visible_start_date":1584901802,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=CHCBOX","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problems statements in [Hindi](https://www.codechef.com/download/translated/COOK116/hindi/CHCBOX.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/COOK116/mandarin/CHCBOX.pdf), [Russian](https://www.codechef.com/download/translated/COOK116/russian/CHCBOX.pdf), [Vietnamese](https://www.codechef.com/download/translated/COOK116/vietnamese/CHCBOX.pdf), and [Bengali](https://www.codechef.com/download/translated/COOK116/bengali/CHCBOX.pdf) as well.

Chef just got a box of chocolates as his birthday gift. The box contains $N$ chocolates in a row (numbered $1$ through $N$), where $N$ is even. For each valid $i$, the $i$-th chocolate has a *sweetness value* $W_i$.

Chef wants to eat all the chocolates in the first half of the box and leave all chocolates in the second half uneaten. Since he does not like chocolates that are too sweet, he will be unhappy if at least one of the chocolates he eats has the maximum sweetness among all the chocolates in the box.

A right cyclic shift by $k$ chocolates ($0 \le k \lt N$) consists of moving the last $k$ chocolates in the row to the beginning in the same order and moving each of the remaining $N-k$ chocolates $k$ places to the right. Before eating the first half of the chocolates, Chef wants to perform some right cyclic shift in such a way that he will not be unhappy after eating them. Find the number of ways to do this, i.e. the number of valid integers $k$ such that if Chef performs the right cyclic shift by $k$ chocolates and then eats the first half of the chocolates in the box, he does not become unhappy.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains a single integer $N$.
- The second line contains $N$ space-separated integers $W_1, W_2, \ldots, W_N$.

### Output
For each test case, print a single line containing one integer ― the number of shifts for which Chef does not become unhappy.

### Constraints
- $1 \le T \le 5$
- $1 \le N \le 10^5$
- $N$ is even
- $1 \le W_i \le 10^5$ for each valid $i$

### Example Input
```
2
6
1 1 2 1 1 1
6
1 1 2 1 1 2
```

### Example Output
```
3
0
```

### Explanation
**Example case 1:** The three valid right shifts and the contents of the box for these shifts are:
- shift by $k = 1$: $(1, 1, 1, 2, 1, 1)$
- shift by $k = 2$: $(1, 1, 1, 1, 2, 1)$
- shift by $k = 3$: $(1, 1, 1, 1, 1, 2)$

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>