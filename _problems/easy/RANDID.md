---
{"category_name":"easy","problem_code":"RANDID","problem_name":"Chef and Diamonds","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"PYTH","5":"PYP3","6":"CS2","7":"ADA","8":"PYPY","9":"TEXT","10":"PAS fpc","11":"NODEJS","12":"RUBY","13":"PHP","14":"GO","15":"HASK","16":"TCL","17":"PERL","18":"SCALA","19":"LUA","20":"kotlin","21":"BASH","22":"JS","23":"LISP sbcl","24":"rust","25":"PAS gpc","26":"BF","27":"CLOJ","28":"R","29":"D","30":"CAML","31":"FORT","32":"ASM","33":"swift","34":"FS","35":"WSPC","36":"LISP clisp","37":"SQL","38":"SCM guile","39":"PERL6","40":"ERL","41":"CLPS","42":"ICK","43":"NICE","44":"PRLG","45":"ICON","46":"COB","47":"SCM chicken","48":"PIKE","49":"SCM qobi","50":"ST","51":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"surya_adm","problem_tester":null,"date_added":"4-12-2019","tags":{"0":"surya_adm"},"problem_difficulty_level":"Easy","best_tag":"","editorial_url":"","time":{"view_start_date":1575801000,"submit_start_date":1575801000,"visible_start_date":1575801000,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=RANDID","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
Our Chef who was a renouned mathematician has recently got into diamonds' business. 

She has accidentally misplaced $Q$ diamonds into a jar which already had $N$ chocolates. She then started wondering about an interesting question as following. 

If we pick items one by one at random without replacement, what would be the expected number of picks required to get all diamonds out. 



###Input:

- First line will contain $T$, number of testcases. Then the testcases follow. 
- Each testcase contains of a single line of input, two integers $N$, $Q$. 

###Output:
For each testcase, output the answer in a single line. Your answer is considered if its absolute or relative error doesn't exceed $10^{-6}$

###Constraints 
- $1 \leq T \leq 10^5$
- $1 \leq N \leq 10^5$
- $1 \leq Q \leq 10^5$

###Sample Input:
	1
	2 2

###Sample Output:
	3.3333333333
	
###EXPLANATION:
Here there are 2 Diamonds, 2 chocolates in the jar. 

Say C is chocolate, D is diamond.

If the random order of picking them from left to right is "CDDC", after 3 picks (CDD) all diamonds are out.

Similarly, for the remaining orders it would be the following:

"CDCD" => 4

"CCDD" => 4

"DDCC" => 2

"DCDC" => 3

"DCCD" => 4

Hence the expected number of picks would be (3+4+4+2+3+4)/6 = 3.333333

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>