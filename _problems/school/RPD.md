---
{"category_name":"school","problem_code":"RPD","problem_name":"Easy Math","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"3\r\n2\r\n2 8\r\n3 \r\n8 2 8\r\n3\r\n9 10 11","output":"7\r\n10\r\n18","explanation":"**Example case 1:** The only two numbers Chef can choose are $2$ and $8$. Their product is $16$ and the sum of digits of $16$ is $7$.\r\n\r\n**Example case 2:** Chef can choose $8$ and $8$; their product is $64$. Note that it is allowed to choose two different elements with the same value.\r\n\r\n**Example case 3:** Chef can choose $9$ and $11$. Their product is $99$ and the sum of its digits is $18$. Note that choosing $10$ and $11$ will result in a larger product ($110$), but the sum of its digits is just $2$.","isDeleted":false}}},"video_editorial_url":"https://youtu.be/UfWF5USovEg","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"PYTH","5":"PYP3","6":"CS2","7":"ADA","8":"PYPY","9":"TEXT","10":"PAS fpc","11":"NODEJS","12":"RUBY","13":"PHP","14":"GO","15":"HASK","16":"TCL","17":"PERL","18":"SCALA","19":"LUA","20":"kotlin","21":"BASH","22":"JS","23":"LISP sbcl","24":"rust","25":"PAS gpc","26":"BF","27":"CLOJ","28":"R","29":"D","30":"CAML","31":"FORT","32":"ASM","33":"swift","34":"FS","35":"WSPC","36":"LISP clisp","37":"SQL","38":"SCM guile","39":"PERL6","40":"ERL","41":"CLPS","42":"ICK","43":"NICE","44":"PRLG","45":"ICON","46":"COB","47":"SCM chicken","48":"PIKE","49":"SCM qobi","50":"ST","51":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"kingofnumbers","problem_tester":"","date_added":"24-07-2019","tags":{"0":"brute","1":"cakewalk","2":"kingofnumbers","3":"ltime74"},"problem_difficulty_level":"Cakewalk","best_tag":"Brute Force","editorial_url":"https://discuss.codechef.com/problems/RPD","time":{"view_start_date":1564246800,"submit_start_date":1564246800,"visible_start_date":1564246800,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=RPD","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Hindi](https://www.codechef.com/download/translated/LTIME74/hindi/RPD.pdf), [Bengali](https://www.codechef.com/download/translated/LTIME74/bengali/RPD.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/LTIME74/mandarin/RPD.pdf), [Russian](https://www.codechef.com/download/translated/LTIME74/russian/RPD.pdf), and [Vietnamese](https://www.codechef.com/download/translated/LTIME74/vietnamese/RPD.pdf) as well.

Chef is attending math classes. On each day, the teacher gives him homework. Yesterday, the teacher gave Chef a sequence of positive integers and asked him to find the maximum product of two different elements of this sequence. This homework was easy for Chef, since he knew that he should select the biggest two numbers.

However, today, the homework is a little bit different. Again, Chef has a sequence of positive integers $A_1, A_2, \ldots, A_N$, but he should find two different elements of this sequence such that the sum of digits (in base $10$) of their product is maximum possible.

Chef thought, mistakenly, that he can still select the two largest elements and compute the sum of digits of their product. Show him that he is wrong by finding the correct answer ― the maximum possible sum of digits of a product of two different elements of the sequence $A$.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of the input contains a single integer $N$.
- The second line contains $N$ space-separated integers $A_1, A_2, \ldots, A_N$.

### Output
For each test case, print a single line containing one integer ― the maximum sum of digits.

### Constraints
- $1 \le T \le 100$
- $2 \le N \le 100$
- $1 \le A_i \le 10^4$ for each valid $i$

### Subtasks
**Subtask #1 (100 points):** original constraints

### Example Input
```
3
2
2 8
3 
8 2 8
3
9 10 11
```

### Example Output
```
7
10
18
```

### Explanation
**Example case 1:** The only two numbers Chef can choose are $2$ and $8$. Their product is $16$ and the sum of digits of $16$ is $7$.

**Example case 2:** Chef can choose $8$ and $8$; their product is $64$. Note that it is allowed to choose two different elements with the same value.

**Example case 3:** Chef can choose $9$ and $11$. Their product is $99$ and the sum of its digits is $18$. Note that choosing $10$ and $11$ will result in a larger product ($110$), but the sum of its digits is just $2$.

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>