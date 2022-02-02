---
{"category_name":"school","problem_code":"POPGATES","problem_name":"At the Gates","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"3\r\n5 3\r\nH T T H T\r\n7 4\r\nH H T T T H H\r\n6 1\r\nT H T H T T","output":"1\r\n2\r\n2","explanation":"","isDeleted":false}}},"video_editorial_url":"https://youtu.be/BzOqdQIp5Hw","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"admin3","problem_tester":"","date_added":"2-11-2019","tags":{"0":"ad","1":"admin3","2":"cakewalk","3":"ltime81","4":"tmwilliamlin"},"problem_difficulty_level":"Cakewalk","best_tag":"Ad Hoc","editorial_url":"https://discuss.codechef.com/problems/POPGATES","time":{"view_start_date":1582995602,"submit_start_date":1582995602,"visible_start_date":1582995602,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=POPGATES","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Hindi](https://www.codechef.com/download/translated/LTIME81/hindi/POPGATES.pdf), [Bengali](https://www.codechef.com/download/translated/LTIME81/bengali/POPGATES.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/LTIME81/mandarin/POPGATES.pdf), [Russian](https://www.codechef.com/download/translated/LTIME81/russian/POPGATES.pdf), and [Vietnamese](https://www.codechef.com/download/translated/LTIME81/vietnamese/POPGATES.pdf) as well.

You are Dastan, the great Prince of Persia!

After searching long for the mysterious 'Sands of Time', you have finally arrived at the gates of the city that hosts the ancient temple of the gods. However, the gate is locked and it can only be opened with a secret code, which you need to obtain by solving the following puzzle:

There is a table in front of you, with $N$ coins placed in a row and numbered $1$ through $N$ from left to right. For each coin, you know whether it is initially showing heads or tails. You have to perform exactly $K$ operations. In one operation, you should remove the rightmost coin present on the table, and if this coin was showing heads right before it was removed, then you should also flip all the remaining coins. (If a coin was showing heads, then after it is flipped, it is showing tails, and vice versa.)

The code needed to enter the temple is the number of coins which, after these $K$ operations are performed, have not been removed and are showing heads. Can you find this number? The fate of Persia lies in your hands...

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains two space-separated integers $N$ and $K$.
- The second line contains $N$ space-separated characters. For each valid $i$, the $i$-th of these characters is 'H' if the $i$-th coin is initially showing heads or 'T' if it is showing tails.

### Output
For each test case, print a single line containing one integer ― the number of coins that are showing heads after $K$ operations.

### Constraints
- $1 \le T \le 200$
- $1 \le K \lt N \le 100$

### Subtasks
**Subtask #1 (100 points):** original constraints

### Example Input
```
3
5 3
H T T H T
7 4
H H T T T H H
6 1
T H T H T T
```

### Example Output
```
1
2
2
```

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>