love.graphics.setDefaultFilter("nearest", "nearest")
function love.load()
    camera = require 'camera'
    sti = require 'sti'
    map = sti("map.lua", { "bump"})
    bump = require 'bump'
    world = bump.newWorld(16)
    map:bump_init(world)

    player = {}
    player.x = 0
    player.y = 10
    player.speed = 3
    player.sprite = love.graphics.newImage("player.png")
    player.w = player.sprite:getWidth() / 2
    player.h = player.sprite:getHeight() / 2
    player.isLeft = false
    world:add(player, player.x, player.y, 9, 6)
    cam = camera()

end
function love.update(dt)
    cam:zoomTo(4)
    if love.keyboard.isDown("w") then
        player.y = player.y - player.speed
    end
    if love.keyboard.isDown("a") then
        player.x = player.x - player.speed
        player.isLeft = true
    end
    if love.keyboard.isDown("s") then
        player.y = player.y + player.speed
    end
    if love.keyboard.isDown("d") then
        player.x = player.x + player.speed
        player.isLeft = false
    end
    player.x, player.y = world:move(player, player.x, player.y)
    cam:lookAt(player.x, player.y)
end
function love.draw()
    cam:attach()
    map:drawLayer(map.layers["Ground"])
    map:drawLayer(map.layers["Walls"])
    map:drawLayer(map.layers["Details"])
    if player.isLeft == true then
        love.graphics.draw(player.sprite, player.x, player.y, nil, -1, 1)
    else
        love.graphics.draw(player.sprite, player.x, player.y, nil, 1, 1)
    end 
    cam:detach()
end