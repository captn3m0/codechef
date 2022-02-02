---
{"category_name":"medium","problem_code":"GUESSMID","problem_name":"Guess the Middle","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"PYTH","5":"PYP3","6":"CS2","7":"ADA","8":"PYPY","9":"TEXT","10":"PAS fpc","11":"NODEJS","12":"RUBY","13":"PHP","14":"GO","15":"HASK","16":"TCL","17":"PERL","18":"SCALA","19":"LUA","20":"kotlin","21":"BASH","22":"JS","23":"LISP sbcl","24":"rust","25":"PAS gpc","26":"BF","27":"CLOJ","28":"R","29":"D","30":"CAML","31":"FORT","32":"ASM","33":"swift","34":"FS","35":"WSPC","36":"LISP clisp","37":"SQL","38":"SCM guile","39":"PERL6","40":"ERL","41":"CLPS","42":"ICK","43":"NICE","44":"PRLG","45":"ICON","46":"COB","47":"SCM chicken","48":"PIKE","49":"SCM qobi","50":"ST","51":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"istva_adm","problem_tester":null,"date_added":"5-07-2012","tags":{"0":"brute","1":"gw19mos","2":"icpc2019","3":"icpcgw19","4":"istva_adm","5":"maths","6":"medium"},"problem_difficulty_level":"Medium-Hard","best_tag":"Brute Force","editorial_url":"https://discuss.codechef.com/problems/GUESSMID","time":{"view_start_date":1576781100,"submit_start_date":1576781100,"visible_start_date":1576781100,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=GUESSMID","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
Chef's father has bought three cakes for him, his brother and sister. Unfortunately, one of the cakes is larger than the other two and so they need to decide who the lucky person is, who gets that larger cake.

Chef's father decides to make them play a game, and the winner will get the larger cake. The game is as follows: The father will choose an interval of numbers and give it to them. All the three children will have to write an integer from the interval [both end points inclusive], and the child whose chosen number is the middle number when all the three numbers are sorted, wins the game, and hence the larger cake.

If there is a tie for the middle number, the father would choose the winner uniform randomly from all the three children. Note that even if only two children had tied for the middle element, the father will choose from all the three children to pick the winner randomly.

Luckily, Chef has an advantage! He knows that both his brother and sister have a favourite digit, and he knows that both of them will choose a number from within the interval such that the number of times that their favourite digit appears in the number as a digit is maximized. If there are multiple numbers which satisfy this criteria, then they will pick any one of them uniformly at random.

For example,
- If the interval is [10, 23], and the brother's favourite digit is 2, then he will choose 22, because 2 appears in it twice, and that is the maximum you can get.
- If the interval is [10, 21], and the brother's favourite digit is 2, then he will choose one number from {12, 20, 21} uniformly at random.

Chef doesn't know how exactly he can utilize this information to win the larger cake. Can you help him? Given the information about the interval, and his siblings' favourite digits, find out which number he should pick, so as to maximize his chance of winning. If there are more than one number with the same maximum probability of winning, then output the smallest number among them.

### Input Format
- The first line will contain $T$, the number of test cases. The description of each test case follows.
- Each test case contains a single line of input, with four integers: $A, B, C, D$. The interval is denoted by $[A, B]$, the brother's favourite digit is $C$, and the sister's favourite digit is $D$.

### Output Format
- For each testcase, output in a single line, the answer: the number which Chef should choose to maximize his chance of winning.

### Constraints 
- $1 \leq T \leq 10^4$
- $1 \leq A \leq B \leq 10^9$
- $1 \leq C, D \leq 9$
- $C \neq D$

### Example Input
```
3
1 100 2 3
22 22 1 9
34 100 2 3
```

### Example Output
```
23
22
44
```

### Explanation
- In the first test case, the brother will choose 22, and the sister will choose 33. The Chef can choose any of {23, 24, ..., 32} and win the game. But you should output the smallest among them, and hence the answer is 23.
<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>