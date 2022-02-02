---
{"category_name":"medium","problem_code":"CHEFGM","problem_name":"Chef Game","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"div_adm","problem_tester":null,"date_added":"22-08-2012","tags":{"0":"div_adm","1":"easy","2":"game","3":"nov13"},"editorial_url":"http://discuss.codechef.com/problems/CHEFGM","time":{"view_start_date":1384162200,"submit_start_date":1384162200,"visible_start_date":1384162200,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/NOV13/mandarin/CHEFGM.pdf"> Mandarin Chinese </a> and <a target="_blank" href="http://www.codechef.com/download/translated/NOV13/russian/CHEFGM.PDF"> Russian</a>.</h3>
<p>Chef Ciel is playing a game with one of her colleagues.</p>
<p> In this game, there are <em>k</em> piles of numbers. There are <em>ni</em> numbers in <em>i</em>th pile. In each move, player has to select a pile and finally a number from that pile. After that, all the numbers which are greater than or equal to chosen number will be removed from that pile. Players take turn alternatively. Player who is unable to move loses the game. </p>
<p>Chef Ciel always make first move. But before making her move, she must choose either EVEN or ODD. If she chooses even then each time she selects a number it must be even and her opponent must select odd number in his/her turn. And vice versa for the other case. </p>
<p>Please help Chef Ciel to make her choice. If neither choice can make her win game, print DON'T PLAY otherwise EVEN or ODD depending on which choice she should make to win game. If you think then you will understand BOTH can not be answer.</p>
<p>Assume that both players play intelligently, if they can force win they will. </p>
<p> <strong>Input : </strong><br /> First line of test case contains t, number of test cases.<br /> Then t test cases follow. First line of each test case contains k, number of piles. <br /> Then description of k piles follow. <em>i</em>th pile description contains number <em>ni</em>, then <em>ni</em> numbers follow in the same line.</p>
<p><strong>Output :</strong> <br /> Print "EVEN", "ODD" or "DON'T PLAY" accordingly.</p>
<p><strong>Constraints : <br /></strong> t &lt;= 1000, k &lt;=100, ni &lt;= 45. Numbers in pile will be non-negative and less than 2^31.</p>

<p><strong>Sample Input :</strong></p>
<div>2</div>
<div>2 </div>
<div>2 3 4</div>
<div>2 4 5</div>
<div>1</div>
<div>3 1 2 3</div>

<p><strong>Sample Output :</strong></p>
<p>DON'T PLAY<br />ODD</p>

<p><b>Explanation:</b> </p>
<p>In the first test case, if you have chosen ODD to play with, it means you will select only ODD numbers and your opponent may choose only EVEN numbers. So you have two options. Either select 3 from first pile or 5 from second pile. If 3 is selected, 3 and 4 are removed from first pile and in next move your opponent's only move will be 4 from second pile removing every numbers thus you lose. If you had selected 5, then your opponent's optimal move would be selecting 4 from first pile. Next you will select 3 and your opponent 4 leaving nothing for you. So if you choose ODD you will lose. Similarly if you choose EVEN you will lose as well. So the answer is DON'T Play.</p>
<p>In the second case, if you choose ODD just select 1 and you will win. If you choose EVEN you have only one move that is 2, and in response your opponent will choose 1 and leave you nothing. Thus answer is ODD.</p>
