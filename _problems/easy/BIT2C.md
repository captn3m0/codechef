---
{"category_name":"easy","problem_code":"BIT2C","problem_name":"D - Break the Rules","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"PYTH","5":"PYP3","6":"CS2","7":"ADA","8":"PYPY","9":"TEXT","10":"PAS fpc","11":"NODEJS","12":"RUBY","13":"PHP","14":"GO","15":"HASK","16":"TCL","17":"PERL","18":"SCALA","19":"LUA","20":"kotlin","21":"BASH","22":"JS","23":"LISP sbcl","24":"rust","25":"PAS gpc","26":"BF","27":"CLOJ","28":"R","29":"D","30":"CAML","31":"FORT","32":"ASM","33":"swift","34":"FS","35":"WSPC","36":"LISP clisp","37":"SQL","38":"SCM guile","39":"PERL6","40":"ERL","41":"CLPS","42":"ICK","43":"NICE","44":"PRLG","45":"ICON","46":"COB","47":"SCM chicken","48":"PIKE","49":"SCM qobi","50":"ST","51":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"sgbtech96","problem_tester":null,"date_added":"3-08-2019","tags":{"0":"bit22019","1":"sgbtech96"},"problem_difficulty_level":"Easy","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/BIT2C","time":{"view_start_date":1569002400,"submit_start_date":1569002400,"visible_start_date":1569002400,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=BIT2C","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
Chef is playing with an expression which consists of integer operands and the following binary
**Bitwise** operators -  **AND, OR** and **XOR**. He is trying to figure out that what could be the **Maximum** possible answer of the expression, given that he **can perform the operation in any order i.e not necessarily follow the rule of Precedence of operators** while evaluating the expression.

After some time of consistent work Chef starts feeling exhausted and wants you to automate this process for him. Can you help him out?

The expression has Bitwise operators in symbol format:
- **&**  stands for AND 
- **|**   stands for OR
- **^**   stands for XOR

**NOTE :** *It is guaranteed that the expression will always be valid, also each OPERATOR will always be preceded and succeeded by an OPERAND.*
###Input:

- The first line of input contains a single integer $T$ denoting the number of test cases.
- The only line of input for each test case is a $string$ which is the Chef's expression to evaluate.

###Output:
For each test case print a single integer i.e the maximum possible value of Chef's expression.

###Constraints 
- $1 \leq T \leq 100$.
- The number of **OPERATORS** in the expression will be **atleast 1** and **atmost 10**.
- Each **OPERAND** may range from **0 to $10^9$**.

###Subtasks
- *10 points* : The number of **OPERATORS** in the expression will be **atmost 5**.
- *20 points* : The number of **OPERATORS** in the expression will be **atmost 8**.
- *70 points* : Original constraints.

###Sample Input:
	2
	3^40|10^2
92^95|56&2&3

###Sample Output:
	43
 95
	
###EXPLANATION:
#####CASE 2 :
- If we first compute **(56 & 2)**, the expression becomes **92^95|0&3**, since **(56 & 2)** yields $0$.
- Now on computing **(95 | 0)**, the expression becomes **92^95&3**.
- Further on computing **(95 & 3)**, the expression becomes **92^3**.
- Finally **(92 ^ 3)** yields **95**, which is the maximum value of the expression.
<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>