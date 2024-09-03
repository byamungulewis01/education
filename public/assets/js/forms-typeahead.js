"use strict";
$(function(){
  var s,e=[
      "Alabama",
      "Alaska",
      "Arizona",
      "Arkansas",
      "California",
      "Colorado",
      "Connecticut",
      "Delaware",
      "Florida",
      "Georgia",
      "Hawaii",
      "Idaho",
      "Illinois",
      "Indiana",
      "Iowa",
      "Kansas",
      "Kentucky",
      "Louisiana",
      "Maine",
      "Maryland",
      "Massachusetts",
      "Michigan",
      "Minnesota",
      "Mississippi",
      "Missouri",
      "Montana",
      "Nebraska",
      "Nevada",
      "New Hampshire",
      "New Jersey",
      "New Mexico",
      "New York",
      "North Carolina",
      "North Dakota",
      "Ohio",
      "Oklahoma",
      "Oregon",
      "Pennsylvania",
      "Rhode Island",
      "South Carolina",
      "South Dakota",
      "Tennessee",
      "Texas",
      "Utah",
      "Vermont",
      "Virginia",
      "Washington",
      "West Virginia",
      "Wisconsin",
      "Wyoming"
  ],
  e=(isRtl&&$(".typeahead").attr("dir","rtl"),
    $(".typeahead").typeahead(
      {
          hint:!isRtl,
          highlight:!0,
          minLength:1
      },
      {
          name:"states",
          source:(s=e,function(e,a){
              var t=[],
              o=new RegExp(e,"i");
              $.each(s,function(e,a){
                  o.test(a)&&t.push(a)
              }),
              a(t)
          })
      }
    ),
    new Bloodhound({
        datumTokenizer:Bloodhound.tokenizers.whitespace,
        queryTokenizer:Bloodhound.tokenizers.whitespace,
        local:e
    })
  ),
  t=(
    $(".typeahead-bloodhound").typeahead(
      {
        hint:!isRtl,
        highlight:!0,
        minLength:1
      },
      {
        name:"states",
        source:e
      }
    ),
    new Bloodhound({
      datumTokenizer:Bloodhound.tokenizers.whitespace,
      queryTokenizer:Bloodhound.tokenizers.whitespace,
      prefetch:assetsPath+"json/typeahead.json"
    })
  );
  $(".typeahead-prefetch").typeahead(
    {
      hint:!isRtl,
      highlight:!0,
      minLength:1
    },
    {
      name:"states",
      source:new Bloodhound({
        datumTokenizer:Bloodhound.tokenizers.whitespace,
        queryTokenizer:Bloodhound.tokenizers.whitespace,
        prefetch:assetsPath+"json/typeahead.json"
      })
    }
  ),
  $(".typeahead-default-suggestions").typeahead(
    {
      hint:!isRtl,
      highlight:!0,
      minLength:0
    },
    {
      name:"states",
      source:function(e,a){
        ""===e?a(t.get("Alaska","New York","Washington")):t.search(e,a)
      }
    }
  );
  var e=new Bloodhound({
    datumTokenizer:Bloodhound.tokenizers.obj.whitespace("value"),
    queryTokenizer:Bloodhound.tokenizers.whitespace,
    prefetch:assetsPath+"json/typeahead-data-2.json"
  }),
  e=($(".typeahead-custom-template").typeahead(null,{
    name:"best-movies",
    display:"value",
    source:e,
    highlight:!0,
    hint:!isRtl,
    templates:{
      empty:[
        '<div class="empty-message p-2">',
        "unable to find any Best Picture winners that match the current query",
        "</div>"
      ].join("\n"),
      suggestion:function(e){
        return"<div><strong>"+e.value+"</strong> â€“ "+e.year+"</div>"
      }
    }
  }),
  new Bloodhound({
    datumTokenizer:Bloodhound.tokenizers.obj.whitespace("team"),
    queryTokenizer:Bloodhound.tokenizers.whitespace,
    local:[
      {team:"Boston Celtics"},
      {team:"Dallas Mavericks"},
      {team:"Brooklyn Nets"},
      {team:"Houston Rockets"},
      {team:"New York Knicks"},
      {team:"Memphis Grizzlies"},
      {team:"Philadelphia 76ers"},
      {team:"New Orleans Hornets"},
      {team:"Toronto Raptors"},
      {team:"San Antonio Spurs"},
      {team:"Chicago Bulls"},
      {team:"Denver Nuggets"},
      {team:"Cleveland Cavaliers"},
      {team:"Minnesota Timberwolves"},
      {team:"Detroit Pistons"},
      {team:"Portland Trail Blazers"},
      {team:"Indiana Pacers"},
      {team:"Oklahoma City Thunder"},
      {team:"Milwaukee Bucks"},
      {team:"Utah Jazz"},
      {team:"Atlanta Hawks"},
      {team:"Golden State Warriors"},
      {team:"Charlotte Bobcats"},
      {team:"Los Angeles Clippers"},
      {team:"Miami Heat"},
      {team:"Los Angeles Lakers"},
      {team:"Orlando Magic"},
      {team:"Phoenix Suns"},
      {team:"Washington Wizards"},
      {team:"Sacramento Kings"}
    ]})
  ),
  a=new Bloodhound({
    datumTokenizer:Bloodhound.tokenizers.obj.whitespace("team"),
    queryTokenizer:Bloodhound.tokenizers.whitespace,
    local:[
      {team:"New Jersey Devils"},
      {team:"New York Islanders"},
      {team:"New York Rangers"},
      {team:"Philadelphia Flyers"},
      {team:"Pittsburgh Penguins"},
      {team:"Chicago Blackhawks"},
      {team:"Columbus Blue Jackets"},
      {team:"Detroit Red Wings"},
      {team:"Nashville Predators"},
      {team:"St. Louis Blues"},
      {team:"Boston Bruins"},
      {team:"Buffalo Sabres"},
      {team:"Montreal Canadiens"},
      {team:"Ottawa Senators"},
      {team:"Toronto Maple Leafs"},
      {team:"Calgary Flames"},
      {team:"Colorado Avalanche"},
      {team:"Edmonton Oilers"},
      {team:"Minnesota Wild"},
      {team:"Vancouver Canucks"},
      {team:"Carolina Hurricanes"},
      {team:"Florida Panthers"},
      {team:"Tampa Bay Lightning"},
      {team:"Washington Capitals"},
      {team:"Winnipeg Jets"},
      {team:"Anaheim Ducks"},
      {team:"Dallas Stars"},
      {team:"Los Angeles Kings"},
      {team:"Phoenix Coyotes"},
      {team:"San Jose Sharks"}
    ]
  });
  $(".typeahead-multi-datasets").typeahead(
    {
      hint:!isRtl,
      highlight:!0,
      minLength:0
    },
    {
      name:"nba-teams",
      source:e,display:"team",
      templates:{
        header:'<h4 class="league-name border-bottom mb-0 mx-3 mt-3 pb-2">NBA Teams</h4>'
      }
    },
    {
      name:"nhl-teams",
      source:a,
      display:"team",
      templates:{
        header:'<h4 class="league-name border-bottom mb-0 mx-3 mt-3 pb-2">NHL Teams</h4>'
      }
    }
  )
});