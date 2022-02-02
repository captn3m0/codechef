---
{"category_name":"school","problem_code":"DISCSHOP","problem_name":"Discount in a Shop","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{}},"video_editorial_url":"https://youtu.be/L3-N2L5QtN4","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"PYTH","5":"PYP3","6":"CS2","7":"ADA","8":"PYPY","9":"TEXT","10":"PAS fpc","11":"NODEJS","12":"RUBY","13":"PHP","14":"GO","15":"HASK","16":"TCL","17":"PERL","18":"SCALA","19":"LUA","20":"kotlin","21":"BASH","22":"JS","23":"LISP sbcl","24":"rust","25":"PAS gpc","26":"BF","27":"CLOJ","28":"R","29":"D","30":"CAML","31":"FORT","32":"ASM","33":"swift","34":"FS","35":"WSPC","36":"LISP clisp","37":"SQL","38":"SCM guile","39":"PERL6","40":"ERL","41":"CLPS","42":"ICK","43":"NICE","44":"PRLG","45":"ICON","46":"COB","47":"SCM chicken","48":"PIKE","49":"SCM qobi","50":"ST","51":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"dpraveen_adm","problem_tester":"","date_added":"12-10-2019","tags":{"0":"dpraveen_adm"},"problem_difficulty_level":"Simple","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/DISCSHOP","time":{"view_start_date":1136053800,"submit_start_date":1136053800,"visible_start_date":1136053800,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=DISCSHOP","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
I have a habit of asking for discounts when I'm buying something. Before you rush to call me a miser, let me tell you that I only ask for discounts if I have to pay at least 10 Rs, since asking for a discount on something that can be paid with just a few coins is really rude.

One day, I was supposed to pay $N$ Rs, but the shopkeeper gave me an unusual offer - he told me that I can remove one of the digits in the decimal representation of $N$ and pay only the resulting price. I am trying to figure out the minimum price I have to pay if I choose the digit to remove optimally. Would you help me, please?

Note that the resulting number after removing digit is allowed to have leading zeros. But while outputting the answer, there should be no leading zeros.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first and only line of each test case contains a single integer $N$.

### Output
For each test case, print a single line containing one integer - the minimum price I have to pay.

### Constraints
- $1 \le T \le 10^5$
- $10 \le N \le 10^9$

### Example Input
```
3
21
132
104
```

### Example Output
```
1
12
4
```

### Explanation
**Example case 1:** I have two choices - remove the first digit, so the price I have to pay is $1$, or remove the second digit, so the price I have to pay is $2$. Obviously, the first option is better.

**Example case 3:** I can remove the digit $1$ and then I only have to pay $4$ Rs.

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>